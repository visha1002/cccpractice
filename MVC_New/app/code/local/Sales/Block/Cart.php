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
        return $quoteModel->getItemCollection();
    }

    public function getQuote()
    {
        $quote = Mage::getSingleton('sales/quote');
        $quote->initQuote();
        return $quote;
    }
}