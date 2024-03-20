<?php

class Sales_Block_Order_success extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/order/success.phtml');
    }
}