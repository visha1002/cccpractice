<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout()->toHtml();
        print_r($layout);
        // echo dirname(__FILE__);
    }

    public function saveAction()
    {
        echo "save data";
    }
}