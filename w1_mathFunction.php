<?php
    echo("-----------Arithmethic math functions---------------")."<br>"."<br>";
    // abs function ----returns absolute(positive) value of number
    echo("abs function ------")."<br>";
    echo(abs(5.5)."<br>");
    echo(abs(-7.9)."<br>");

    // ceil function ---- returns nearest integer(higher)
    echo("ceil function ------")."<br>";
    echo(ceil(5.78)."<br>");
    echo(ceil(1.1)."<br>");
    echo(ceil(6)."<br>");
    echo(ceil(6.7)."<br>");
    echo(ceil(-4.6)."<br>");
    echo(ceil(-4)."<br>");

    // floor function ----returns nearest interger(lower)
    echo("floor function ------")."<br>";
    echo(floor(5.78)."<br>");
    echo(floor(6)."<br>");
    echo(floor(1.1)."<br>");
    echo(floor(6.7)."<br>");
    echo(floor(-4.6)."<br>");
    echo(floor(-4)."<br>");

    // round function ----round off value
    echo("round function ------")."<br>";
    echo(round(4.56)."<br>");
    echo(round(89.43524234213)."<br>");
    echo(round(2.74565347,5)."<br>")."<br>";

    echo("-----------Power functions---------------")."<br>"."<br>";

    // pow function
    echo("pow function ------")."<br>";
    echo(pow(76.8,3)."<br>");
    echo(pow(5,2)."<br>");

    // sqrt function
    echo("sqrt function ------")."<br>";
    echo(sqrt(25)."<br>");
    echo(sqrt(578.7)."<br>")."<br>";

    // rand function ---- generates random numbers
    echo("rand function ------")."<br>";
    echo(rand()."<br>");
    echo(rand()."<br>");
    echo(rand(3,688)."<br>");

    // number_format function
    echo("number format function ------")."<br>";
    echo(number_format("7643752734672")."<br>");
    echo(number_format("6763263267535", 5)."<br>");
?>