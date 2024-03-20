<?php

class Sales_Model_Order_Status_History extends Core_Model_Abstract
{

    public function init()
    {
        $this->_modelClass = 'sales/order_status_history';
        $this->resourceClass = 'Sales_Model_Resource_Order_Status_History';
        $this->collectionClass = 'Sales_Model_Resource_Order_Collection_Status_History';
    }
}