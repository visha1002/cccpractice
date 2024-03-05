<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // $layout = $this->getLayout()->toHtml();
        // print_r($layout);
        // echo dirname(__FILE__);

        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('skin/css/header.css');
        $layout->getChild('head')->addCss('skin/css/footer.css');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $child = $layout->getchild('content');
        $banner = $layout->createBlock('core/template')->setTemplate('page/banner.phtml');
        $child->addChild('banner', $banner);

        $layout->toHtml();
        // echo "<pre>";
        // print_r($layout);
    }

    public function testAction()
    {
        // echo "save data";
        echo "<pre>";
        $productModel = Mage::getSingleton('core/session')->set('customerId', '1');
        print_r($_SESSION);
        // $productModel = Mage::getSingleton('catalog/product')->setData(['x', 'y', 'z']);
        // print_r($productModel);
        die;
    }
}