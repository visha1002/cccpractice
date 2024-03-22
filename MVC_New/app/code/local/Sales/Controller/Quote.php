<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    protected $_loginRequiredActions = [
        'checkout'
    ];

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $action = $this->getRequest()->getActionName();
        if (in_array($action, $this->_loginRequiredActions)) {
            $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
            if (!$customerId) {
                $this->setRedirect('customer/account/login');
                exit();
            }
        }
    }

    public function addAction()
    {
        $data = $this->getRequest()->getParams('cart');
        // var_dump(get_class($data));
        echo "<pre>";
        print_r($data);

        Mage::getSingleton('sales/quote')->addProduct($data);

        $this->setRedirect('sales/quote/view');
    }

    public function viewAction()
    {
        $id = Mage::getSingleton('core/session')->get('quote_id');
        // echo $id;
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $cart = $layout->createBlock('sales/cart');
        $child->addChild('cart', $cart);

        $layout->toHtml();
    }

    public function removeAction()
    {
        Mage::getModel('sales/quote_item')->load($this->getRequest()->getParams('id', 0))->delete();
        $quote = Mage::getModel('sales/quote');
        $quote->initQuote();
        $quote->save();

        $this->setRedirect('sales/quote/view');
    }

    public function editAction()
    {
        $formData = $this->getRequest()->getParams('cart');
        $id = $formData['product_id'];
        $qty = $formData['qty'];
        $quote = Mage::getModel('sales/quote');
        $quote->initQuote();
        $data = $quote->getItemCollection()->addFieldToFilter('product_id', $id)->getFirstItem();
        $data->addData('qty', $qty);
        $data->save();
        $quote->save();
        $this->setRedirect('sales/quote/view');
    }

    public function checkoutAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs(Mage::getBaseUrl() . 'skin/js/jquery-3.7.1.min.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $checkout = $layout->createBlock('sales/quote_checkout');
        $child->addChild('checkout', $checkout);
        $layout->toHtml();
    }

    public function saveformAction()
    {
        $addressData = $this->getRequest()->getParams('checkoutdata');
        echo "<pre>";
        print_r($addressData);
        $addressModel = Mage::getSingleton('sales/quote')->addAddress($addressData);

        $shippingData = $this->getRequest()->getParams('shipping_data');
        print_r($shippingData);
        $shippingModel = Mage::getSingleton('sales/quote')->addShipping($shippingData);

        $paymentData = $this->getRequest()->getParams('payment_data');
        print_r($paymentData);
        $paymentModel = Mage::getSingleton('sales/quote')->addPayment($paymentData);
        $this->setRedirect('sales/quote/checkout');
    }

    public function convertAction()
    {
        Mage::getSingleton('sales/quote')->convert();
        Mage::getSingleton('core/session')->remove('quote_id');
        $this->setRedirect('sales/quote/success');
    }

    public function successAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs(Mage::getBaseUrl() . 'skin/js/jquery-3.7.1.min.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $success = $layout->createBlock('sales/order_success');
        $child->addChild('success', $success);
        $layout->toHtml();
    }

}