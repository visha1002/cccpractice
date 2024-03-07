<?php

class Cources_Block_Cource extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('cources/form.phtml');
    }

    public function getStudentDetails()
    {
        return Mage::getModel('cources/cource')->load(Mage::getSingleton('core/session')->get('student_id'));
    }
}