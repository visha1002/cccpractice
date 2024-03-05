<?php

class Admin_Controller_Account extends Core_Controller_Admin_Action
{
    protected $_allowActions = [
        "login"
    ];

    public function testAction()
    {
        echo "test";
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
            $child = $layout->getchild('content');
            $login = $layout->createBlock('admin/login');
            $child->addChild('login', $login);

            $layout->toHtml();
        } else {
            try {
                $adminData = $this->getRequest()->getParams('a_login');
                $username = $adminData['admin_username'];
                $password = $adminData['admin_password'];

                if ($username == Admin_Model_User::USERNAME && $password == Admin_Model_User::PASSWORD) {
                    Mage::getSingleton('core/session')->set('logged_in_admin_username', $username);
                    // echo "Log in successfull";
                    $this->setRedirect('admin/catalog_product/list');
                } else {
                    echo "Wrong credentials";
                    Mage::getSingleton('core/session')->remove('logged_in_admin_username');
                }
            } catch (Exception $e) {
                echo "error";
            }
        }
        // var_dump(Admin_Model_User::USERNAME);
        // var_dump(Admin_Model_User::PASSWORD);
    }
}