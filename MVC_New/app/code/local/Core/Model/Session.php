<?php

class Core_Model_Session
{
    public function __construct()
    {
        // if (is_null($_SESSION)) {
        session_start();
        // }
    }

    public function getId()
    {
        if (!is_null($_SESSION)) {
            return session_id();
        }
        return FALSE;
    }

    public function get($key)
    {
        if (array_key_exists($key, $_SESSION)) {
            return $_SESSION[$key];
        }
        return FALSE;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return $this;
    }

    public function remove($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function __destruct()
    {

    }
}