<?php

    $num = 10;
    function fibonacci($num){
        if($num <= 1){
            return $num;
        }
        else{
            return fibonacci($num-1) + fibonacci($num-2);
        }
    }
    
    for($i=0; $i<$num; $i++){
        echo fibonacci($i)," ";
    }

?>