<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/head.css');
        $child = $layout->getchild('content');
        $form = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $form);

        $layout->toHtml();
        // echo "<pre>";
        // print_r($layout);
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('p_data');
        echo "<pre>";
        print_r($data);

        $productModel = Mage::getModel("catalog/product");
        $productModel->setData($data);
        print_r($productModel);

        $productModel->save();
        print_r($productModel);

    }
}