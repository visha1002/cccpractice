<?php

class Core_Block_Layout extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('core/1column.phtml');
        $this->prepareChildren();
    }

    public function prepareChildren()
    {
        echo "<pre>";
        $header = $this->createBlock('page/header');
        $footer = $this->createBlock('page/footer');
        $content = $this->createBlock('page/content');
        $head = $this->createBlock('page/head');
        print_r($header);
        echo "</pre>";
        $this->addChild('header', $header);
        $this->addChild('footer', $footer);
        $this->addChild('content', $content);
        $this->addChild('head', $head);
    }

    public function createBlock($className)
    {
        return Mage::getBlock($className);
        // ->setLayout($this);
    }

    public function getRequest()
    {
        return Mage::getModel('core/request');
    }
}