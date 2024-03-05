<?php

class Banner_Block_Banner extends Core_Block_Template
{
    public function getBannerDetail()
    {
        return Mage::getModel('banner')->load($this->getRequest()->getParams('pid', 0));
    }

}