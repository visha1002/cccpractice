<?php

class Contactus_Model_Resource_Contactus extends Core_Model_Resource_Abstract
{
    public function init()
    {
        $this->_tableName = 'contact_us';
        $this->_primaryKey = 'message_id';
    }
}
