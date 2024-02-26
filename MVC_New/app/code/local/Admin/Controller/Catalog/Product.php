<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $form = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $form);

        $layout->toHtml();
        // echo "<pre>";
        // print_r($layout);
    }

    public function saveAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {
                throw new Exception("Request id not valid!");
            }
            $data = $this->getRequest()->getParams('p_data');
            echo "<pre>";
            print_r($data);
            //take id from data['product_id]
            $productModel = Mage::getModel("catalog/product"); // load(id)
            $productModel->setData($data);
            print_r($productModel);

            $productModel->save();
            print_r($productModel);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

    }

    public function deleteAction()
    {
        // if (isset($_GET['pid'])) {
        //     $product = Mage::getModel('catalog/resource_product');
        //     $delete = $product->deleteSql($product->getTableName(), ['product_id' => $_GET['pid']]);
        //     echo $delete;
        //     $product->getAdapter()->delete($delete);
        //     echo (get_class($product));
        // }
        Mage::getModel('catalog/product')
            ->load($this->getRequest()->getParams("pid", 0))
            ->delete();
        header("Location:list");

    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $child = $layout->getchild('content');
        $list = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $list);
        $layout->toHtml();
    }
}