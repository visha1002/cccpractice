<?php

class Shipping_Model_Shipping extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'shipping/shipping';
        $this->resourceClass = 'Shipping_Model_Resource_Shipping';
        $this->collectionClass = 'Shipping_Model_Resource_Collection_Shipping';
    }

    public function getShippingMethods()
    {
        $shippingMethods = ['e' => 'Express', 'f' => 'Freight'];

        return $shippingMethods;
    }
}