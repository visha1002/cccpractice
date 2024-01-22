<?php
    function fibonacci($num){
        $num1 = 0;
        $num2 = 1;
        echo "Fibbonacci series upto $num terms are : <br>";

        if($num == 1){
            echo $num1;
        }
        else if($num == 2){
            echo "$num1 $num2"; 
        }
        else{
            echo "$num1 $num2 ";
            for($i = 1; $i <= $num-2; $i++){
                $num3 = $num1 + $num2;
                echo $num3." ";
        
                $num1 = $num2;
                $num2 = $num3;
            }
        }
    }
    
    fibonacci(12);
    
?>