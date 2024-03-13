<?php

class Sales_Block_Quote_Checkout extends Sales_Block_Cart
{
    public function __construct()
    {
        $this->setTemplate('sales/quote/checkout.phtml');
    }

    public function getCustomerAddress()
    {
        return Mage::getModel('customer/address')->getCollection();
    }

    public function getQuote()
    {
        $quote = Mage::getSingleton('sales/quote');
        $quote->initQuote();
        return $quote;
    }

    public function getCustomerDetails()
    {
        $cid = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $customer = Mage::getModel('customer/customer')->load($cid);
        return $customer;
    }

}