<?php

class Sales_Controller_Order extends Core_Controller_Front_Action
{

    public function listAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs(Mage::getBaseUrl() . 'skin/js/jquery-3.7.1.min.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $orderView = $layout->createBlock('sales/order_list');
        $child->addChild('orderView', $orderView);
        $layout->toHtml();
    }

    public function detailsAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs(Mage::getBaseUrl() . 'skin/js/jquery-3.7.1.min.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/sales/details.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $orderDetails = $layout->createBlock('sales/order_details');
        $child->addChild('orderDetails', $orderDetails);
        $layout->toHtml();
    }
}