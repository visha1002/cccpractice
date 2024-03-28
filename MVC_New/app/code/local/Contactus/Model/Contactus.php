<?php

class Contactus_Model_Contactus extends Core_Model_Abstract
{
    public function init()
    {
        $this->resourceClass = "Contactus_Model_Resource_Contactus";
        $this->collectionClass = "Contactus_Model_Resource_Collection_Contactus";
        $this->_modelClass = "contactus/contactus";
    }
}