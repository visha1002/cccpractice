<?php

class class1 {
    public $a = 67;
    private $b = 45;
    protected $c = 23;
}

class class2 extends class1{
    public $a = 10;
}

class class3 extends class2{

}

$obj1 = new class1();
print_r($obj1->a);
echo "<br>";
$obj2 = new class2();
print_r($obj2->a);
echo "<br>";
$obj3 = new class3();
print_r($obj3->a);