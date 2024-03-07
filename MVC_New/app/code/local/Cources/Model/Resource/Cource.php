<?php

class Cources_Model_Resource_Cource extends Core_Model_Resource_Abstract
{

    public function init()
    {
        $this->_tableName = 'ccc_cource_enrollment';
        $this->_primaryKey = 'en_id';
    }
}