<?php

class Sales_Block_Cart extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('cart/cart.phtml');
    }

    public function getCartDetails()
    {
        $quoteModel = $this->getQuote();
        $id = $quoteModel->getId();
        $cartModel = Mage::getModel('sales/quote_item')->getCollection()->addFieldToFilter('quote_id', $id);
        return $cartModel;
    }

    public function getProductDetails()
    {
        $cartModel = $this->getCartDetails();
        $products = []; // Initialize an array to store product details

        foreach ($cartModel->getData() as $cart) {
            $pid = $cart->getProductId();
            $productModel = Mage::getModel('catalog/product')->load($pid);
            $products[] = $productModel; // Add product details to the array
        }

        return $products;
    }


    public function getQuote()
    {
        $quote = Mage::getSingleton('sales/quote');
        $quote->initQuote();
        return $quote;
    }
}