<?php

class Admin_Controller_Banner extends Core_Controller_Admin_Action
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
        $banner = $layout->createBlock('banner/admin_form');
        $child->addChild('banner', $banner);
        $layout->toHtml();
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
        $child = $layout->getchild('content');
        $banner_list = $layout->createBlock('banner/admin_list');
        $child->addChild('bannerList', $banner_list);
        $layout->toHtml();
    }

    public function saveAction()
    {

        try {
            if (!$this->getRequest()->isPost()) {
                throw new Exception('Request not valid');
            }
            $data = $this->getRequest()->getParams('banner');
            $data['banner_image'] = $_FILES['banner']['name']['banner_image'];
            // echo "<pre>";
            // print_r($data);

            $bannerModel = Mage::getModel("banner/banner"); // load(id)
            $bannerModel->setData($data);
            // print_r($bannerModel);

            $uploadDir = 'media/banner/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $uploadedFile = $_FILES['banner']['name']['banner_image'];
            echo $uploadedFile;
            $uploadPath = $uploadDir . basename($uploadedFile);

            if (move_uploaded_file($_FILES['banner']['tmp_name']['banner_image'], $uploadPath)) {
                // Save file path to the database
                $bannerModel->setBannerImage($uploadPath);
                $bannerModel->save();
                // $this->setRedirect("admin/banner/form?id={$bannerModel->getId()}");
            } else {
                throw new Exception('File upload failed.');
            }

            $bannerModel->save();
            print_r($bannerModel);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

    }

    public function deleteAction()
    {
        Mage::getModel('banner/banner')
            ->load($this->getRequest()->getParams("pid", 0))
            ->delete();
        header("Location:list");

    }
}