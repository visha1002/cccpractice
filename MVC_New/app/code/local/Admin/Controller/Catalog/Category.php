<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Admin_Action
{

    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
        $child = $layout->getchild('content');
        $form = $layout->createBlock('catalog/admin_Category_Form');
        $child->addChild('categoryform', $form);

        $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('cat_data');
        echo "<pre>";
        print_r($data);
        $categoryModel = Mage::getModel('catalog/category')->setData($data);
        $categoryModel->save();
        $this->setRedirect('admin/catalog_category/list');
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs(Mage::getBaseUrl() . 'skin/js/jquery-3.7.1.min.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $catlist = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('catlist', $catlist);
        $layout->toHtml();
    }

    public function deleteAction()
    {
        Mage::getModel('catalog/category')
            ->load($this->getRequest()->getParams("pid", 0))
            ->delete();
        $this->setRedirect('admin/catalog_category/list');
    }
}