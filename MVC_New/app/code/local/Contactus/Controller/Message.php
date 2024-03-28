<?php

class Contactus_Controller_Message extends Core_Controller_Front_Action
{

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('msg');
        // print_r($data);
        $contactUsModel = Mage::getModel('contactus/contactus')->setData($data);
        $contactUsModel->save();
        $this->setRedirect('');
    }
}