<?php

class Admin_Controller_Customer extends Core_Controller_Admin_Action
{

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $child = $layout->getchild('content');
        $cList = $layout->createBlock('customer/admin_list');
        $child->addChild('cList', $cList);
        $layout->toHtml();
    }
}