<?php

class Sales_Model_Quote_Address extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/quote_address';
        $this->resourceClass = 'Sales_Model_Resource_Quote_Address';
        $this->collectionClass = 'Sales_Model_Resource_Collection_Quote_Address';
    }
}