<?php

class Cources_Controller_Cource extends Core_Controller_Front_Action
{
    public function enrollAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
        $child = $layout->getchild('content');
        $cources = $layout->createBlock('cources/cource');
        $child->addChild('login', $cources);

        $layout->toHtml();


    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('cource');
        $data['selected_cource'] = implode(',', $data['selected_cource']);
        print_r($data);

        $courceModel = Mage::getModel('cources/cource');
        $courceModel->setData($data);
        $courceModel->save();
        Mage::getSingleton('core/session')->set('student_id', $data['en_id']);
    }
}
