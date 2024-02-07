<?php

class Core_Model_Request
{ // class name starts with module name
    public function __construct()
    {

    }

    public function getParams($key = '')
    {
        return ($key == '')
            ? $_REQUEST
            : (isset($_REQUEST[$key])
                ? $_REQUEST[$key]
                : ''
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
        $request = str_replace("/Practice/MVC/", "", $_SERVER['REQUEST_URI']);
        return $request;
    }
}
?>