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
        $customer_id = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $customer_id = (!$customer_id) ? 0 : $customer_id;
        if ($customer_id) {
            $customerQuote1 = Mage::getSingleton('sales/quote')->getCollection()->addFieldToFilter('customer_id', $customer_id)->addFieldToFilter('order_id', 0)->getFirstItem();
            if (!$customerQuote1) {
                $data1 = [
                    'quote_id' => $quoteId,
                    'customer_id' => $customer_id
                ];
                $this->setData($data1)->save();
            } else {
                $customerQuote = Mage::getSingleton('sales/quote')->getCollection()->addFieldToFilter('customer_id', $customer_id)->addFieldToFilter('order_id', 0)->addFieldToFilter('quote_id', $customerQuote1->getQuoteId())->getFirstItem();
                $this->load($customerQuote->getId());
            }
        } else {
            $this->load($quoteId);
            if (!$this->getId()) {
                $quote = Mage::getModel('sales/quote')
                    ->setData(
                        [
                            'tax_percent' => 0,
                            'grand_total' => 0,
                        ]
                    )
                    ->save();
                Mage::getSingleton('core/session')->set('quote_id', $quote->getId());
                $this->load($quote->getId());
            }
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

    public function addAddress($address)
    {
        $this->initQuote();
        $customerAddress = Mage::getModel('sales/quote_customer');
        $quoteCustomer = $customerAddress->getCollection()->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
        $quoteCustomerId = ($quoteCustomer && $quoteCustomer->getId()) ? $quoteCustomer->getId() : 0;

        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $customerModel = Mage::getModel('customer/customer')->load($customerId);
        $customerEmail = $customerModel->getCustomerEmail();

        $customerAddress->setData($address)
            ->addData('quote_customer_id', $quoteCustomerId)
            ->adddata('quote_id', $this->getId())
            ->addData('customer_id', $customerId)
            ->addData('email', $customerEmail);
        $customerAddress->save();
        print_r($customerAddress);
    }

    public function addPayment($payment)
    {
        $this->initQuote();
        $paymentModel = Mage::getModel('sales/quote_payment');
        $quotePayment = $paymentModel->getCollection()->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
        $paymentId = ($quotePayment && $quotePayment->getId()) ? $quotePayment->getId() : 0;

        $paymentModel->setData($payment)
            ->addData('payment_id', $paymentId)
            ->addData('quote_id', $this->getId());
        $paymentModel->save();
        print_r($paymentModel);

        $salesPaymentId = $paymentModel->getId();
        $salesQuote = Mage::getSingleton('sales/quote')->addData('payment_id', $salesPaymentId);
        $salesQuote->save();
    }

    public function addShipping($shipping)
    {
        $this->initQuote();
        $shippingModel = Mage::getModel('sales/quote_shipping');
        $quoteShipping = $shippingModel->getCollection()->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
        $shippingId = ($quoteShipping && $quoteShipping->getId()) ? $quoteShipping->getId() : 0;

        $shippingModel->setData($shipping)
            ->addData('shipping_id', $shippingId)
            ->addData('quote_id', $this->getId());
        $shippingModel->save();
        print_r($shippingModel);

        $salesShippingId = $shippingModel->getId();
        $salesQuote = Mage::getSingleton('sales/quote')->addData('shipping_id', $salesShippingId);
        $salesQuote->save();
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

            // sales_order_item save
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

                //reduce number of quantity
                $inventory = $productData->getInventory();
                $qty = $orderItem->getQty();
                $inventory = $inventory - $qty;
                $productData->addData('inventory', $inventory)->save();
                // print_r($orderItem);
            }
            //sales_order_customer save

            $quoteCustomer = Mage::getModel('sales/quote_customer')->getCollection()->addFieldToFilter('quote_id', $this->getId())->getFirstItem()->getData();
            $orderCustomer = Mage::getModel('sales/order_customer')
                ->setData($quoteCustomer)
                ->removeData('quote_customer_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();

            // print_r($orderCustomer);

            //sales_order_payment_method save

            $quotePayment = Mage::getModel('sales/quote_payment')->getCollection()->addFieldToFilter('quote_id', $this->getId())->getFirstItem()->getData();
            $orderPayment = Mage::getModel('sales/order_payment')->setData($quotePayment)
                ->removeData('payment_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
            // print_r($orderPayment);

            //sales_order_Shipping_method save

            $quoteShipping = Mage::getModel('sales/quote_shipping')->getCollection()->addFieldToFilter('quote_id', $this->getId())->getFirstItem()->getData();
            $orderShipping = Mage::getModel('sales/order_shipping')->setData($quoteShipping)
                ->removeData('shipping_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
            // print_r($orderShipping);

            $paymentOrderId = $orderPayment->getId();
            $order->addData('payment_id', $paymentOrderId);

            $shippingOrderId = $orderShipping->getId();
            $order->addData('shipping_id', $shippingOrderId);
            $order->save();
        }
    }

    function generateOrderNumber()
    {
        $timestamp = time(); // Get current Unix timestamp
        $randomNumber = mt_rand(10000, 99999); // Generate a random number
        $orderNumber = 'ORD_' . $timestamp . '_' . $randomNumber; // Concatenate timestamp and random number
        return $orderNumber;
    }
}