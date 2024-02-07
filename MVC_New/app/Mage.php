<?php

class Mage
{
    public static function init()
    {
        // $request_model = new Core_Model_Request();
        // echo ($request_model->getRequestUri());
        $Request_Model = Mage::getModel("core/request");
        echo (get_class($Request_Model));
    }

    public static function getModel($modelName)
    {
        $modelName = explode("/", $modelName);
        $str = ucfirst($modelName[0]);
        $str .= "_Model_";
        $str .= ucfirst($modelName[1]);

        return new $str();
    }
}