<?php

class Core_Controller_Front
{
    public function init()
    {
        $request = Mage::getModel('core/request');
        // echo (get_class($request));
        $actionName = $request->getActionName() . "Action";
        // var_dump($actionName);
        $fullClassName = $request->getFullControllerClass();
        // echo $fullClassName;
        $controller = new $fullClassName();
        $controller->$actionName();
    }
}