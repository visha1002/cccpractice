<?php

class Admin_Controller_Cources_Cources extends Core_Controller_Front_Action
{

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
        $child = $layout->getchild('content');
        $cources = $layout->createBlock('admin/cources_list');
        $child->addChild('cource_list', $cources);

        $layout->toHtml();
    }

    public function deleteAction()
    {
        Mage::getModel('cources/cource')
            ->load($this->getRequest()->getParams("pid", 0))
            ->delete();
    }
}