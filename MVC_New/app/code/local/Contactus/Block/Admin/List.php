<?php

class Contactus_Block_Admin_List extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('contactus/admin/list.phtml');
    }

    public function getContactusDetails()
    {
        return Mage::getModel('contactus/contactus')->getCollection();
    }
}