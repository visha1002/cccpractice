<?php
    $higherPercent = 10;
    // suppose b is 50
    $b = 50;

    $a = $b + ($higherPercent/100)*$b;
    // $b = $a - ($lowerPercent/100)*$a   --- making lowerPercent the left side 
    $lowerPercent = 100*(1-($b/$a));
    echo "If a is 10% higher than b then b is " ,round($lowerPercent,2), " % less than a.";
?>