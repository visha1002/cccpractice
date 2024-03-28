<?php

class Sales_Model_Order_Payment extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/order_payment';
        $this->resourceClass = 'Sales_Model_Resource_Order_Payment';
        $this->collectionClass = 'Sales_Model_Resource_Collection_Order_Payment';
    }

    public function getPaymentMethod()
    {
        $mapping = ['cod' => 'Cash On Delivery', 'p' => 'Phone Payment', 'cc' => 'Credit Cart'];
        if (isset ($this->_data['payment_method'])) {
            return $mapping[$this->_data['payment_method']];
        }
    }

}