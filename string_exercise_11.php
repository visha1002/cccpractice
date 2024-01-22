<?php
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90];
    $len = count($arrayToSort);

    for($i=1; $i<$len; $i++){
        for($j=0; $j<$len-1; $j++){
            if($arrayToSort[$j] > $arrayToSort[$j+1]){
                $temp = $arrayToSort[$j];
                $arrayToSort[$j] = $arrayToSort[$j+1];
                $arrayToSort[$j+1] = $temp;
            }
        }
    }
    print_r($arrayToSort);
?>