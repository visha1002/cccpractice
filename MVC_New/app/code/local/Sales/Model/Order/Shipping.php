<?php

class Sales_Model_Order_Shipping extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/order_shipping';
        $this->resourceClass = 'Sales_Model_Resource_Order_Shipping';
        $this->collectionClass = 'Sales_Model_Resource_Collection_Order_Shipping';
    }

    public function getShippingMethod()
    {
        $mapping = ['e' => 'Express', 'f' => 'Freight'];
        if (isset ($this->_data['shipping_method'])) {
            return $mapping[$this->_data['shipping_method']];
        }
    }
}