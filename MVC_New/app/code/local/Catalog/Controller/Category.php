<?php

class Catalog_Controller_Category extends Core_Controller_Front_Action
{
    public function viewAction()
    {

        $layout = $this->getLayout();
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $child = $layout->getChild('content');
        $catView = $layout->createBlock('catalog/category_view');
        $child->addChild('catview', $catView);
        $layout->toHtml();
    }
}