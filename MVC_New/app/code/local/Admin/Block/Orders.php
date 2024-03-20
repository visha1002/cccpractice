<?php

class Admin_Block_Orders extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/order/admin/view.phtml');
    }

    public function getCancelReqestOrders()
    {
        $cancel = Mage::getModel('sales/order')->getCollection()->addFieldToFilter('status', 'can-Request');
        // echo "<pre>";
        // print_r($cancel->getData());
        return $cancel;
    }

}