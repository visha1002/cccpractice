<?php

class Cources_Model_Rate extends Core_Model_Abstract
{

    public function init()
    {

        $this->_modelClass = 'cources/rate';
        $this->resourceClass = 'Cources_Model_Resource_Rate';
        $this->collectionClass = 'Cources_Model_Resource_Collection_Rate';

    }
}