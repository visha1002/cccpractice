<?php
    //calling function in same class

    class abc{

        public function __construct(){
            $this->test();
        }
        public function test(){
            echo "test<br>";
        }
    }

    $obj1 = new abc();

    //private function calling in same class

    class word{
        private function hello(){
            echo "This is private function";
        }
        public function __construct() {
            $this->hello();
        }

        public $a = 15;
    }

    $obj = new word();
?>