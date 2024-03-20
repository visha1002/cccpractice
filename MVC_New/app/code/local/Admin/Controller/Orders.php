<?php

class Admin_Controller_Orders extends Core_Controller_Admin_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/list.css");
        $child = $layout->getchild('content');
        $orders = $layout->createBlock('admin/orders');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }

    public function statusAction()
    {
        $status = $this->getRequest()->getparams('status');
        echo "<pre>";
        // print_r($status);
        $orderNumber = $status['order_number'];
        // print_r($orderNumber);
        $orderModel = Mage::getModel('sales/order')->getCollection()->addFieldToFilter('order_number', $orderNumber)->getFirstItem();
        $fromStatus = $orderModel->getStatus();
        $orderModel->addData('status', $status['status']);
        // print_r($orderModel);
        $toStatus = $orderModel->getStatus();
        $orderId = $orderModel->getId();
        $orderModel->save();

        $statusHistory = Mage::getModel('sales/order_status_history')
            ->addData('order_id', $orderId)
            ->addData('from_status', $fromStatus)
            ->addData('to_status', $toStatus)
            ->addData('action_by', 'admin');
        // print_r($statusHistory);
        $statusHistory->save();
        $this->setRedirect('admin/orders/view');
    }

    public function deleteAction()
    {
        Mage::getModel('sales/order')
            ->load($this->getRequest()->getParams("pid", 0))
            ->delete();
        $this->setRedirect('admin/orders/view');
    }
}