<?php

class Mage
{
    public static function init()
    {
        // $request_model = new Core_Model_Request();
        // echo ($request_model->getRequestUri());
        $requestModel = Mage::getModel("core/request");
        echo (get_class($requestModel));
    }

    public static function getModel($modelName)
    {
        $modelName = explode("/", $modelName);
        $str = ucfirst($modelName[0]);
        $str .= "_Model_";
        $str .= ucfirst($modelName[1]);

        return new $str();
    }

    public static function getSingleton($className)
    {

    }

    public static function register($key, $value)
    {

    }

    public static function registry($key)
    {

    }

    public static function getBaseDir($subDir = null)
    {

    }
}