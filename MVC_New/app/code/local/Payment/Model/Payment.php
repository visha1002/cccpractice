<?php

class Payment_Model_Payment extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'payment/payment';
        $this->resourceClass = 'Payment_Model_Resource_Payment';
        $this->collectionClass = 'Payment_Model_Resource_Collection_Payment';
    }

    public function getPaymentMethods()
    {
        $paymentMethods = ['cod' => 'Cash On Delivery', 'p' => 'Phone Payment', 'cc' => 'Credit Cart'];

        return $paymentMethods;
    }
}