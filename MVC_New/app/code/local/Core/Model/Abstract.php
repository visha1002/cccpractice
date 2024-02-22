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
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }
    public function __call($name, $args)
    {
        $name = substr($name, 3);
        return isset($this->_data[$name])
            ? $this->_data[$name]
            : (isset($args[0]) ? $args[0] : null);
    }

    public function getResource()
    {
        return new $this->resourceClass();
    }

    public function getCollection()
    {

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

    public function save()
    {
        // print_r($this->getData());

        $this->getResource()->save($this);
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

    }
}