<?php

class Sales_Block_Order_Details extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/order/details.phtml');
    }

    public function getOrderItems()
    {
        $orderId = $this->getRequest()->getParams('oid');
        // print_r($orderId);
        $orderModel = Mage::getModel('sales/order')->load($orderId);
        return $orderModel->getItemCollection();
    }
}