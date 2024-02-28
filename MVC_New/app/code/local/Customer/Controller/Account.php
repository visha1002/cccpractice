<?php

class Customer_Controller_Account extends Core_Controller_Front_Action
{
    protected $_loginRequiredActions = [
        'dashboard'
    ];

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $action = $this->getRequest()->getActionName();
        if (in_array($action, $this->_loginRequiredActions)) {
            $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
            if (!$customerId) {
                $this->setRedirect('customer/account/login');
                exit();
            }
        }
    }
    public function registerAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
        $child = $layout->getChild('content');
        $register = $layout->createBlock('customer/register');
        $child->addChild('register', $register);
        $layout->toHtml();
    }

    public function saveAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {
                throw new Exception("Request id not valid!");
            }
            $data = $this->getRequest()->getParams('c_data');
            echo "<pre>";
            print_r($data);
            $customerModel = Mage::getModel('customer/customer')->setData($data);
            $customerModel->save();
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function loginAction()
    {
        if (!$this->getRequest()->isPost()) {
            $layout = $this->getLayout();
            $layout->getChild('head')->addJs('js/page.js');
            $layout->getChild('head')->addJs('js/head.js');
            $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
            $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
            $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
            $child = $layout->getChild('content');
            $login = $layout->createBlock('customer/login');
            $child->addChild('login', $login);
            $layout->toHtml();
        } else {
            try {
                $loginData = $this->getRequest()->getParams('c_login');
                // print_r($loginData);
                // die;
                $email = $loginData['customer_email'];
                // print_r($email);
                $password = $loginData['customer_password'];
                $data = Mage::getModel('customer/customer')->getCollection()
                    ->addFieldToFilter('customer_email', $email)
                    ->addFieldToFilter('customer_password', $password);
                $count = 0;
                $customerID = 0;
                foreach ($data->getData() as $data) {
                    $count++;
                    $customerID = $data->getCustomerId();
                }

                if ($count) {
                    Mage::getSingleton('core/session')->set('logged_in_customer_id', $customerID);
                    // echo "Log In Successfull";
                    $this->setRedirect('customer/account/dashboard');
                } else {
                    echo "Wrong Credentials ! ";
                    Mage::getSingleton('core/session')->remove('logged_in_customer_id');
                }
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
        }
    }

    public function dashboardAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $child = $layout->getChild('content');
        $dashboard = $layout->createBlock('customer/dashboard');
        $child->addChild('dashboard', $dashboard);
        $layout->toHtml();
    }

    public function deleteAction()
    {
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        Mage::getModel('customer/customer')->load($customerId)->delete();
        header("Location:login");
    }
}