<?php
    class Product{
        private $productId;
        private $name;
        private $price;

        public function __construct($productId, $name, $price) {
            $this->productId = $productId;
            $this->name = $name;
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }
        public function getname(){
            return $this->name;
        }
    }

    class ShoppingCart{
        private $items = [];

        public function addItem(Product $product){
            $this->items[] = $product;
        }

        public function GetTotal(){
            $total = 0;

            foreach($this->items as $item){
                $total += $item->getPrice();
            }
            return $total;
        }

        public function displayItems(){
            echo "Shopping Cart itams :<br> ";
            foreach($this->items as $item){
                echo "{$item->getname()} - {$item->getPrice()} USD<br>";
            }
        }
    }

    $product1 = new Product(1,"TV",7000);
    $product2 = new Product(2,"Shoes",200);

    $cart = new ShoppingCart();
    $cart->addItem($product1);
    $cart->addItem($product2);

    $cart->displayItems();
    echo "Total price : " . $cart->GetTotal() . " USD";
?>