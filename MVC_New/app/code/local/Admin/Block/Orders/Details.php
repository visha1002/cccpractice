<?php

class Admin_Block_Orders_Details extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/order/admin/details.phtml');
    }

    public function getOrderItems()
    {
        $orderId = $this->getRequest()->getParams('oid');
        // print_r($orderId);
        $orderModel = Mage::getModel('sales/order')->load($orderId);
        return $orderModel->getItemCollection();
    }

    public function getCustomer()
    {
        $orderId = $this->getRequest()->getParams('oid');
        $orderModel = Mage::getModel('sales/order')->load($orderId);
        $customerId = $orderModel->getCustomerId();
        $customerModel = Mage::getModel('customer/customer')->load($customerId);
        // print_r($customerModel);
        return $customerModel;
    }

    public function getShipping()
    {
        $orderId = $this->getRequest()->getParams('oid');
        $orderModel = Mage::getModel('sales/order')->load($orderId);
        $shippingId = $orderModel->getShippingId();
        $shippingModel = Mage::getModel('sales/order_shipping')->load($shippingId);
        return $shippingModel;
    }

    public function getPayment()
    {
        $orderId = $this->getRequest()->getParams('oid');
        $orderModel = Mage::getModel('sales/order')->load($orderId);
        $paymentId = $orderModel->getPaymentId();
        $paymentModel = Mage::getModel('sales/order_payment')->load($paymentId);
        return $paymentModel;
    }

}