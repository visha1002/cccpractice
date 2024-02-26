<?php

class Core_Model_Request
{ // class name starts with module name

    protected $_moduleName;
    protected $_controllerName;
    protected $_actionName;
    public function __construct()
    {
        $uri = $this->getRequestUri();
        // print_r($uri);
        $uri = explode('?', $uri);
        $uri = $uri[0];

        $uri = array_filter(explode('/', $uri));
        $this->_moduleName = isset($uri[0]) ? $uri[0] : 'page';
        $this->_controllerName = isset($uri[1]) ? $uri[1] : 'index';
        $this->_actionName = isset($uri[2]) ? $uri[2] : 'index';
    }

    public function getUrl($path)
    {
        return 'http://localhost/practice/MVC_New/' . $path;
    }
    public function getParams($key = '', $arg = null)
    {
        return ($key == '')
            ? $_REQUEST
            : (isset($_REQUEST[$key])
                ? $_REQUEST[$key]
                : ((!is_null($arg)) ? $arg : '')
            );
    }

    public function getPostData($key = '')
    {
        return ($key == '')
            ? $_POST
            : (isset($_POST[$key])
                ? $_POST[$key]
                : ''
            );
    }

    public function getQueryData($key = '')
    {
        return ($key == '')
            ? $_GET
            : (isset($_GET[$key])
                ? $_GET[$key]
                : ''
            );
    }

    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getRequestUri()
    {
        $request = str_replace("/practice/MVC_New/", "", $_SERVER['REQUEST_URI']);
        return $request;
    }

    public function getActionName()
    {
        return $this->_actionName;
    }

    public function getModuleName()
    {
        return $this->_moduleName;
    }

    public function getControllerName()
    {
        return $this->_controllerName;
    }

    public function getFullControllerClass()
    {
        $strClass = $this->_moduleName . '_Controller_' . $this->_controllerName;
        $strClass = ucwords($strClass, '_');
        return $strClass;
    }
}
?>