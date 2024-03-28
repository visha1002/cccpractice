<?php

class Customer_Block_Admin_List extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('customer/admin/list.phtml');
    }

    public function getCustomers()
    {
        return Mage::getModel('customer/customer')->getCollection();
    }
}