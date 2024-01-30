<?php
    class Shape {

    }

    class Circle extends Shape{
        public $radius;

        public function Area(){
            return pi() * $this->radius * $this->radius;
        }

        public function Perimeter(){
            return 2 * pi() * $this->radius;
        }
    }

    class Rectangle extends Shape{
        public $length;
        public $width;

        public function Area(){
            return $this->length * $this->width;
        }

        public function Perimeter(){
            return 2 * ($this->length + $this->width);
        }
    }

    $circle = new Circle();
    $circle->radius = 4;

    $rectangle = new Rectangle();
    $rectangle->length = 12;
    $rectangle->width = 10;

    echo($circle->Area()."<br>");
    echo($circle->Perimeter()."<br>");

    echo($rectangle->Area()."<br>");
    echo($rectangle->Perimeter()."<br>");
?>