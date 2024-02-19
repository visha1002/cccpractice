<?php

class Catalog_Model_Resource_Product
{
    protected $_tableName = null;
    protected $_primaryKey = null;
    public function __construct()
    {
        $this->init();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }

    public function getTableName()
    {
        return $this->_tableName;
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }

    public function load($id, $columns = null)
    {
        $sql = "SELECT * FROM {$this->_tableName}  
            where {$this->_primaryKey} = {$id} limit 1;";
        return $this->getAdapter()->fetchRow($sql);
    }
    // Above all code move to resource Abstract
    public function init()
    {
        $this->_tableName = 'ccc_product';
        $this->_primaryKey = 'product_id';
    }
}