<?php

    echo "For loop --------------- "."<br>"."<br>";
    for($i=1; $i<=10; $i++){
        echo "$i "."<br>";
    }
    
    echo "<br>while loop --------------- "."<br>"."<br>";
    $i=1;        // first checks condition then runs 
    while($i<10){
        echo "$i "."<br>";
        $i++;
    }

    echo "<br>do-while loop --------------- "."<br>"."<br>";
    $i=1;
    do{           // runs atleast one time then checks condition
        echo "$i"."<br>";
        $i++;
    }while($i<10);

    echo "<br>for-each loop --------------- "."<br>"."<br>";
    $days = array("Sunday","Monday","tuesday","Wednesday","Thursday","Friday","Saturday");
    foreach($days as $d){
        echo $d."<br>";
    }
?>