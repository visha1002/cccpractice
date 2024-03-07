<?php

class Cources_Model_Cource extends Core_Model_Abstract
{

    public function init()
    {
        $this->_modelClass = 'cources/cource';
        $this->resourceClass = 'Cources_Model_Resource_Cource';
        $this->collectionClass = 'Cources_Model_Resource_Collection_Cource';
    }

    // protected function _beforeSave()
    // {
    //     $session_id = Mage::getSingleton('core/session')->get('student_name');
    //     if ($session_id) {

    //     }
    // }
}