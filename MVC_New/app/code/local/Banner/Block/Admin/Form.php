<?php

class Banner_Block_Admin_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('banner/admin/form.phtml');
    }

    public function getBannerDetail()
    {
        return Mage::getModel('banner/banner')->load($this->getRequest()->getParams('pid', 0));
    }
}