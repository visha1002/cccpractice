<?php

class Catalog_Block_Category_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/category/view.phtml');
    }

    public function getProductDetail()
    {
        return Mage::getModel('catalog/product')->load($this->getRequest()->getParams('cid', 0));
    }
}