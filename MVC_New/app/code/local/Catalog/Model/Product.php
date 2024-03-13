<?php

class Catalog_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->resourceClass = "Catalog_Model_Resource_Product";
        $this->collectionClass = "Catalog_Model_Resource_Collection_Product";
        $this->_modelClass = "catalog/product";
    }

    public function getStatus()
    {
        $mapping = [1 => 'Enabled', 0 => 'Disabled'];
        if (isset($this->_data['status'])) {
            return $mapping[$this->_data['status']];
        }
    }

    public function getCategoryID()
    {
        $mapping = [1 => 'Electronics', 2 => 'Clothing', 3 => 'Stationary', 4 => 'Accessories', 5 => 'Drinks', 6 => 'Lighting', 7 => 'Mattresses', 8 => 'Footwear', 9 => 'Furniture', 10 => 'Food'];
        if (isset($this->_data['category_id'])) {
            return $mapping[$this->_data['category_id']];
        }
    }

    protected function _beforeSave()
    {
        if (!isset($this->_data['created_at']) || $this->_data['created_at'] == "") {
            $this->_data['created_at'] = '2015-01-01';
        }
        $this->_data['updated_at'] = date('Y-m-d H:i:s');
        return $this;
    }

    protected function _afterSave()
    {

    }
}