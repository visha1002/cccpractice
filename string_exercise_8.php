<?php

    function prime($num){
        $prime = false;
        $i = 2;

        while($i < $num){
            if($num % $i == 0){
                $prime = false;
                $i++;
                break;
            }
            else{
                $prime = true;
                $i++;
            }
        }

        if($prime == true || $num == 2){
            echo "The number is prime !";
        }
        else{
            echo "The number is not prime !";
        }
    }
    prime(5);
?>