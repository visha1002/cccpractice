<?php
    $name = "56";
    $name = (int) $name; // string to integer type casting
    var_dump($name);
    echo "<br>";

    $abc = 8676786;  // Integer to String type casting
    var_dump((string) $abc);
    echo "<br>";

    var_dump((float) $abc); // Integer to float type casting
    echo "<br>";

    $bool = 1;
    var_dump((bool) $bool); // Interger to Boolean type casting
    echo "<br>";

    print_r((array) $name);  // String to Array type casting
    echo "<br>";

    $name = (object) $name;
    var_dump($name);
    
?>