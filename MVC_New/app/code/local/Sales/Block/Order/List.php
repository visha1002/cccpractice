<?php

class Sales_Block_Order_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/order/list.phtml');
    }

    public function getOrders()
    {
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        return Mage::getModel('sales/order')->getCollection()->addFieldToFilter('customer_id', $customerId);
    }
}