<?php

class Cources_Model_Cource extends Core_Model_Abstract
{

    public function init()
    {
        $this->_modelClass = 'cources/cource';
        $this->resourceClass = 'Cources_Model_Resource_Cource';
        $this->collectionClass = 'Cources_Model_Resource_Collection_Cource';
    }

    public function getSelectedCource()
    {
        $this->_data['selected_cource'] = explode(",", $this->_data['selected_cource']);
        $mapping = [1 => 'PHP', 2 => 'Javascript', 3 => 'JQuery', 4 => 'AJAX', 5 => 'MVC', 6 => 'Magento1'];
        $selectedCourses = [];

        foreach ($this->_data['selected_cource'] as $courseId) {
            if (isset($mapping[$courseId])) {
                $selectedCourses[] = $mapping[$courseId];
            }
        }

        $selectedCourses = implode(",", $selectedCourses);
        return $selectedCourses;
    }

    // protected function _beforeSave()
//     {
//         $this->_data['selected_cource'] = explode(",", $this->_data['selected_cource']);
//         foreach ($this->_data['selected_cource'] as $courseId) {

    //             $rateModel = Mage::getModel('cources/rate')->getCollection()->addFieldToFilter('id', $courseId);
//         }
//         $rateModel->getData();
//         print_r($rateModel->getCharge());
//     }
}