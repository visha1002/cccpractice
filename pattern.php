<?php
$n=10;

//first logic
for($i=1;$i<=$n;$i++){

    for($j=1;$j<=$n;$j++){
        if($i + $j >= $n+2){
        echo "&nbsp";
        }
        else{
            echo $j." ";
        }
    }
    echo "<br>";
}
// second logic
for($i=1;$i<=$n;$i++){

    for($j=1;$j<=$n;$j++){
        if($j<= ($n+1)-$i){
            echo $j." ";
        }
    }
    echo "<br>";
}
?>