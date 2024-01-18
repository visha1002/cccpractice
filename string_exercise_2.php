<?php

    $text = "Hello, World! How are you doing?";

    echo "Exercise 2"."<br>"."<br>";
    echo "The length of the string is : ",strlen($text)."<br>";
    echo strtolower($text)."<br>";
    echo strtoupper($text)."<br>";
    echo "String after replacement is : ",str_replace("How are you doing?", "Fine, thank you!", $text)."<br>";
    echo "first 10 characters are : ",substr($text,0,10)."<br>";
    echo "String from 8th character to end is : ",substr($text, 7)."<br>";
?>