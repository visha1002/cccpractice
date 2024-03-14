<?php

class Sales_Model_Quote extends Core_Model_Abstract
{

    public function init()
    {
        $this->_modelClass = 'sales/quote';
        $this->resourceClass = 'Sales_Model_Resource_Quote';
        $this->collectionClass = 'Sales_Model_Resource_Collection_Quote';
    }

    protected function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += $_item->getRowTotal();
        }
        ;
        $this->addData('grand_total', $grandTotal);
    }

    public function initQuote()
    {
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');

        $quoteId = (!$quoteId) ? 0 : $quoteId;
        $this->load($quoteId);

        if (!$this->getId()) {
            $quote = Mage::getModel('sales/quote')
                ->setData(
                    [
                        'tax_percent' => 0,
                        'grand_total' => 0
                    ]
                )
                ->save();
            Mage::getSingleton('core/session')->set('quote_id', $quote->getId());
            $this->load($quote->getId());
            print_r($quote);
        }
    }

    public function addProduct($product)
    {
        $this->initQuote();
        print_r($this);

        if ($this->getId()) {
            Mage::getModel('sales/quote_item')->addItem($this, $product['product_id'], $product['qty']);
            $this->save();
        }
    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()->addFieldToFilter('quote_id', $this->getId());
    }

    public function convert()
    {
        $this->initQuote();
        if ($this->getId()) {
            // sales_order save
            $order = Mage::getModel('sales/order')
                ->setData($this->getData());
            $order->removeData('quote_id')
                ->removeData('order_id')
                ->removeData('shipping_id')
                ->removeData('payment_id');
            $orderNumber = $this->generateOrderNumber();
            $order->addData('order_number', $orderNumber);
            $order->save(); // ------ convert sales_quote to order in sales_order
            $orderId = $order->getId();
            $this->addData('order_id', $orderId)
                ->save();  // order id is set in sales_quote

            //sales_order_item save
            foreach ($this->getItemCollection()->getData() as $_item) {
                $orderItem = Mage::getModel('sales/order_item')
                    ->setData($_item->getData());
                $orderItem->removeData('item_id')
                    ->removeData('quote_id');
                echo "<pre>";
                $orderItem->addData('order_id', $orderId);
                $productData = $_item->getProduct();
                $productName = $productData->getName();
                $productColor = $productData->getColor();
                $orderItem->addData('product_name', $productName)
                    ->addData('product_color', $productColor)
                    ->save();
                print_r($orderItem);
            }
        }
    }

    public function generateOrderNumber()
    {
        $orderNumber = mt_rand(10000, 999999);
        return $orderNumber;
    }
}