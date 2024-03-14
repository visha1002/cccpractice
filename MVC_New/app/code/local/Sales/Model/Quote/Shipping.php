<?php

class Sales_Model_Quote_Shipping extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/quote_shipping';
        $this->resourceClass = 'Sales_Model_Resource_Quote_Shipping';
        $this->collectionClass = 'Sales_Model_Resource_Collection_Quote_Shipping';
    }

    public function addShipping($shipping)
    {
        $this->setData($shipping)->save();
    }
}