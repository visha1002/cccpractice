<?php

class Customer_Controller_Address extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
        $child = $layout->getChild('content');
        $address = $layout->createBlock('customer/address');
        $child->addChild('address', $address);
        $layout->toHtml();
    }

    public function listAction()
    {
        echo "customer-address-list";
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('c_address');
        echo "<pre>";
        print_r($data);
        $cAddressModel = Mage::getModel('customer/address')->setData($data);
        $cid = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $cAddressModel->addData('customer_id', $cid);
        print_r($cAddressModel);
        $cAddressModel->save();
        $this->setRedirect('sales/quote/checkout');
    }

    public function deleteAction()
    {
        echo "customer-address-delete";
    }
}