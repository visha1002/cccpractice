<?php

class Customer_Block_Address extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('customer/address/form.phtml');
    }
}