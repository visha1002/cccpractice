<?php

class Catalog_Model_Resource_Product extends Core_Model_Resource_Abstract
{

    // Above all code move to resource Abstract
    public function init()
    {
        $this->_tableName = 'catalog_product';
        $this->_primaryKey = 'product_id';
    }
}