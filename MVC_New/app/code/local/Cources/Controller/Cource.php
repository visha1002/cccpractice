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
        if ($this->getRequest()->isPost()) {
            echo "<pre>";
            $data = $this->getRequest()->getParams('cource');
            Mage::getSingleton('core/session')->set('student_name', $data['student_name']);
            $data['selected_cource'] = implode(',', $data['selected_cource']);
            // print_r($data);
            $sessionId = session_id();
            $data['session_id'] = $sessionId;
            print_r($data);
            $courceModel = Mage::getModel('cources/cource');
            $courceModel->setData($data);
            $courceModel->save();
        }
    }
}
