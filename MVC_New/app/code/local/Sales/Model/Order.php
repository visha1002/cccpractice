<?php

class Sales_Model_Order extends Core_Model_Abstract
{

    public function init()
    {
        $this->_modelClass = 'sales/order';
        $this->resourceClass = 'Sales_Model_Resource_Order';
        $this->collectionClass = 'Sales_Model_Resource_Collection_Order';
    }

    public function generateOrderNumber()
    {
        $orderNumber = mt_rand(10000, 999999);
        return $orderNumber;
    }
}