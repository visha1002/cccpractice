<?php

class Mage
{
    private static $baseDir = 'C:/xampp/htdocs/practice/MVC_New';
    private static $singleton = [];

    public static function init()
    {
        // $request_model = new Core_Model_Request();
        // echo ($request_model->getRequestUri());
        // $requestModel = Mage::getModel("core/request");
        // echo (get_class($requestModel));

        $frontController = new Core_Controller_Front();
        $frontController->init();
    }

    public static function getModel($modelName)
    {
        $modelName = explode("/", $modelName);
        $str = ucfirst($modelName[0]);
        $str .= "_Model_";
        $str .= ucfirst($modelName[1]);

        return new $str();
    }

    public static function getBlock($blockName)
    {
        $blockName = explode("/", $blockName);
        $block = ucfirst($blockName[0]);
        $block .= "_Block_";
        $block .= ucfirst($blockName[1]);

        return new $block();
    }

    public static function getSingleton($className)
    {
        if (isset(self::$singleton[$className])) {
            return self::$singleton[$className];
        } else {
            return self::$singleton[$className] = self::getModel($className);
        }
    }

    public static function register($key, $value)
    {

    }

    public static function registry($key)
    {

    }

    public static function getBaseDir($subDir = null)
    {
        if ($subDir) {
            return self::$baseDir . '/' . $subDir;
        }
        return self::$baseDir;
    }

    public static function getBaseUrl()
    {
        return "http://localhost/practice/MVC_New/";
    }
}