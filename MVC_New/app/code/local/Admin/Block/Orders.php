<?php

class Admin_Block_Orders extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/order/admin/view.phtml');
    }

}