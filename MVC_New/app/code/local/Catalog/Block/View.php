<?php

class Catalog_Block_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/product/view.phtml');
    }

    public function getProductDetail()
    {
        return Mage::getModel('catalog/product')->load($this->getRequest()->getParams('pid', 0));
    }
}