<?php

class Admin_Block_Dashboard extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('catalog/admin/dashboard.phtml');
    }

    public function getProductCount()
    {
        $count = 0;
        $catalogModel = Mage::getModel('catalog/product')->getCollection();
        foreach ($catalogModel->getData() as $products) {
            $count++;
        }

        return $count;
    }

    public function getCustomerCount()
    {
        $count = 0;
        $customerModel = Mage::getModel('customer/customer')->getCollection();
        foreach ($customerModel->getData() as $customer) {
            $count++;
        }

        return $count;
    }

    public function getOrderCount()
    {
        $count = 0;
        $orderModel = Mage::getModel('sales/order')->getCollection();
        foreach ($orderModel->getData() as $order) {
            $count++;
        }

        return $count;
    }

    public function getMessageCount()
    {
        $count = 0;
        $ContactUsModel = Mage::getModel('contactus/contactus')->getCollection();
        foreach ($ContactUsModel->getData() as $message) {
            $count++;
        }

        return $count;
    }

    public function getRecentOrders()
    {
        $orderModel = Mage::getModel('sales/order')->getCollection()->addFieldToOrderBy('order_id', 'DESC')->limit(5);
        return $orderModel;
    }

    public function getRecentCustomers()
    {
        $customerModel = Mage::getModel('customer/customer')->getCollection()->addFieldToOrderBy('customer_id', 'DESC')->limit(5);
        return $customerModel;
    }
}