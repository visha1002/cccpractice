<?php

class Core_Block_Abstract
{
    public $template;
    public $data = [];
    public function setTemplate($template)
    {

    }

    public function getTemplat()
    {

    }

    public function __get($key)
    {

    }

    public function __unset($key)
    {

    }

    public function __set($key, $value)
    {

    }

    public function addData($key, $value)
    {

    }

    public function getData($key = null)
    {

    }

    public function setData($data)
    {

    }

    // public function getUrl($action = null, $controller = null, $params = [], $resetParams = false)
    // {

    // }

    public function getRequest()
    {
        return Mage::getModel('core/request');
    }

    public function render()
    {
        include Mage::getBaseDir('app') . '/design/frontend/template/' . $this->getTemplate();
    }
}