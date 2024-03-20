<?php

class Core_Controller_Front
{
    public function init()
    {
        Mage::getSingleton('core/session'); //included because problem in sales/order/view
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