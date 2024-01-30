<?php
    // class Point {
    //     public function Distance($x1, $y1, $x2, $y2){
    //         $x = $x1 - $x2;
    //         $y = $y1 - $y2;

    //         return sqrt(pow($x,2) + pow($y,2));
            
    //     }
    // }

    // $point = new Point();
    // echo($point->Distance(1,2,4,6));
    
    class Point {
        public $x;
        public $y;

        public function Distance(Point $new){
            return sqrt(pow($this->x-$new->x,2) + pow($this->y-$new->y,2));
        }
    }

    $point1 = new Point();
    $point1->x = 3;
    $point1->y = 5;

    $point2 = new Point();
    $point2->x = 9;
    $point2->y = 8;

    echo($point2->Distance($point1));

?>