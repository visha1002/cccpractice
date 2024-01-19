<?php
    echo("Arithmetic operators ------------")."<br>"."<br>";

    $num1 = 5;
    $num2 = 3;

    echo "Addition of $num1 and $num2 is : ", $num1 + $num2."<br>";
    echo "Subtraction of $num1 and $num2 is : ", $num1 - $num2."<br>";
    echo "Multiplication of $num1 and $num2 is : ", $num1 * $num2."<br>";
    echo "Division of $num1 and $num2 is : ", $num1 / $num2."<br>";
    echo "Modulus of $num1 and $num2 is : ", $num1 % $num2."<br>";
    echo "Exponentiation of $num1 and $num2 is : ", $num1 ** $num2."<br>"."<br>";

    echo("Assignment operators ------------")."<br>"."<br>";

    $a = 7;
    $b = $a;
    echo "a=$a and b=$b"."<br>";
    
    $a += $b;
    echo "a=$a and b=$b"."<br>";
    $a -= $b;
    echo "a=$a and b=$b"."<br>";
    $a *= $b;
    echo "a=$a and b=$b"."<br>";
    $a /= $b;
    echo "a=$a and b=$b"."<br>";
    $a %= $b;
    echo "a=$a and b=$b"."<br>"."<br>";

    echo("Comparison operators ------------")."<br>"."<br>";

    $x = 600;
    $y = "600";
    var_dump($x == $y); // checks only value and returns true
    echo "<br>";
    var_dump($x === $y); // checks value and datatype and returns false
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($y <> $y); // same as !=
    echo "<br>";
    var_dump($x !== $y);
    echo "<br>";
    var_dump($x > $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($x <=> $y); // -1 if x is greater, 0 if x and y i equal, 1 if y is greater
    echo "<br>"."<br>";

    echo("Logical operators ------------")."<br>"."<br>";

    $i = 23;
    $j = 45;

    if($i>0 && $j>0){  // print is both condition is true
        echo ("This is and operator")."<br>";
    }
    if($i>30 || $j>30){  // print if both or any one condition is true
        echo("This is or operator")."<br>";
    }
    if($i>20 xor $j<40){ // print if only one conditon is true but not both
        echo("This is xor operator")."<br>";
    }
    if(!($i >= 25)){ // print of conditon is not true
        echo("This is not operator")."<br>"."<br>";
    }

    echo("Increment and Decremnt operators ------------")."<br>"."<br>";

    $inc = 50;
    echo $inc++."<br>"; // prints and then increments
    $inc = 50;
    echo ++$inc."<br>"; // increments and then prints
    $inc = 50;
    echo $inc--."<br>"; // prints and then decreases
    $inc = 50;
    echo --$inc."<br>"."<br>"; // decreases and then prints

    echo("String operators ------------")."<br>"."<br>";

    $str1 = "hello,";
    $str2 = "How are You?";
    echo($str1 . $str2)."<br>"; // concatenation

    $str1 .= $str2;
    echo $str1."<br>"."<br>"; // conacatenation in string 1

    echo("Ternary operator ------------")."<br>"."<br>";

    $number = -45;

    echo ($number > 0) ? "Positive number" : "Negative Number";

?>