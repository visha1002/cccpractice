<?php

class Customer_Model_Address extends Core_Model_Abstract
{
    public function init()
    {
        $this->resourceClass = "Customer_Model_Resource_Address";
        $this->collectionClass = "Customer_Model_Resource_Collection_Address";
        $this->_modelClass = "customer/address";
    }
}