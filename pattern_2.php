<?php
// even number pattern
    $n = 10;
    for($i=1; $i<=$n/2; $i++){
        for($j=1; $j<=$n; $j++){
            if($j < $i || $i + $j > $n+1){
                echo "&nbsp"." ";
                echo "&nbsp";
            }
            else{
                echo $j." ";
            }
        }
        echo "<br>";
    }

    for($i=($n/2)+1; $i<=$n; $i++){
        for($j=1; $j<=$n; $j++){
            if($j > $i || $i + $j <= $n){
                echo "&nbsp"." ";
                echo "&nbsp";
            }
            else{
                echo $j." ";
            }
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    

    //odd number pattern
    $n = 11;
    for($i=1; $i<=($n/2)+1; $i++){
        for($j=1; $j<=$n; $j++){
            if($j < $i || $i + $j > $n+1){
                echo "&nbsp"." ";
                echo "&nbsp";
            }
            else{
                echo $j." ";
            }
        }
        echo "<br>";
    }

    for($i=($n/2)+1; $i<=$n; $i++){
        for($j=1; $j<=$n; $j++){
            if($j > $i+1 || $i + $j < $n){
                echo "&nbsp"." ";
                echo "&nbsp";
            }
            else{
                echo $j." ";
            }
        }
        echo "<br>";
    }
?>