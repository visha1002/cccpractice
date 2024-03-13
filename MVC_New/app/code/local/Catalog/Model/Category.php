<?php

class Catalog_Model_Category extends Core_Model_Abstract
{
    public function init()
    {
        $this->resourceClass = "Catalog_Model_Resource_Category";
        $this->collectionClass = "Catalog_Model_Resource_Collection_Category";
        $this->_modelClass = "catalog/category";
    }
}