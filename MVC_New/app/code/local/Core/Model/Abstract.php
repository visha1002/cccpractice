<?php

class Core_Model_Abstract
{
    protected $_data = [];
    protected $resourceClass = '';
    protected $collectionClass = '';
    protected $resource = null;
    protected $collection = null;
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {

    }

    public function setResourceClass($resourceClass)
    {

    }

    public function setCollectionClass($collectionClass)
    {

    }

    public function setId($id)
    {
        $this->_data[$this->getResource()->getPrimaryKey()] = $id;
        return $this;
    }

    public function getId()
    {
        return isset($this->_data[$this->getResource()->getPrimaryKey()])
            ? $this->_data[$this->getResource()->getPrimaryKey()]
            : false;
    }
    public function __call($name, $args)
    {
        // $name = strtolower(substr($name, 3));
        $name = $this->camelTodashed(substr($name, 3));
        return isset($this->_data[$name])
            ? $this->_data[$name]
            : "";
    }
    public function dashesToCamelCase($string, $capitalizeFirstCharacter = false)
    {
        $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }
        return $str;
    }
    public function camelTodashed($className)
    {
        return strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1_', $className));
    }

    public function getResource()
    {
        return new $this->resourceClass();
    }

    public function getCollection()
    {
        $collection = new $this->collectionClass();
        $collection->setResource($this->getResource());
        $collection->select();
        return $collection;
    }


    public function __set($key, $value)
    {

    }

    public function __get($key)
    {

    }

    public function __unset($key)
    {

    }

    public function getData($key = null)
    {
        //if condition
        return $this->_data;
    }

    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }

    public function addData($key, $value)
    {

    }

    public function removeData($key = null)
    {

    }
    protected function _beforeSave()
    {
        return $this;
    }

    protected function _afterSave()
    {
        return $this;
    }

    public function save()
    {
        // print_r($this->getData());
        $this->_beforeSave();
        $this->getResource()->save($this);
        $this->_afterSave();
        return $this;
    }

    public function load($id, $column = null)
    {
        // echo get_class($this->getResource());
        $this->_data = $this->getResource()->load($id, $column);
        // print_r($data);
        return $this;
        // echo "SELECT * FROM {$this->getResource()->getTableName()} where {$this->getResource()->getPrimaryKey()} = 1 limit 1;";
    }

    public function delete()
    {
        $this->getResource()->delete($this);
        return $this;
    }
}