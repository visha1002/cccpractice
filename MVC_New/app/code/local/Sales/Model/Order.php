<?php

class Sales_Model_Order extends Core_Model_Abstract
{

    public function init()
    {
        $this->_modelClass = 'sales/order';
        $this->resourceClass = 'Sales_Model_Resource_Order';
        $this->collectionClass = 'Sales_Model_Resource_Collection_Order';
    }

    function generateOrderNumber()
    {
        $timestamp = time(); // Get current Unix timestamp
        $randomNumber = mt_rand(10000, 99999); // Generate a random number
        $orderNumber = 'ORD_' . $timestamp . '_' . $randomNumber; // Concatenate timestamp and random number
        return $orderNumber;
    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/order_item')->getCollection()->addFieldToFilter('order_id', $this->getId());
    }
}