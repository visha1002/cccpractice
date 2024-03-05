<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/dashboard.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $child = $layout->getchild('content');

        $id = $this->getRequest()->getParams('pid');
        // printf($id);
        if (isset($id) && !empty($id)) {
            $view = $layout->createBlock('catalog/view');
            $child->addChild('view', $view);
        } else {
            $list = $layout->createBlock('catalog/list');
            $child->addChild('list', $list);
        }
        $layout->toHtml();
    }
}