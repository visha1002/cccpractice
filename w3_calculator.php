<?php
    class calculator{
        public function add($a, $b){
            return $a+$b;
        }

        public function subtract($a, $b){
            return $a-$b;
        }

        public function multiply($a, $b){
            return $a * $b;
        }

        public function divide($a, $b){
            if($b == 0){
                return "Error--- trying divide by 0";
            }
            else{
                return $a/$b;
            }
        }
    }

    $obj = new calculator();
    echo($obj->add(56,30))."<br>";
    echo($obj->subtract(56,30))."<br>";
    echo($obj->multiply(16,9))."<br>";
    echo($obj->divide(5,0))."<br>";
    echo($obj->divide(1200,12));
?>