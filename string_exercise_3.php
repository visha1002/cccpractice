<?php
    $sentence = "The quick brown fox jumps over the lazy dog";

    echo "Exercise 3"."<br>"."<br>";
    echo "The position of the word fox is at : ",strpos($sentence, "fox")."<br>";
    if(str_contains($sentence, "cat")){
        echo "The word cat is present."."<br>";
    }
    else{
        echo "The word cat is not present."."<br>";
    }
    echo "The first 20 characters of the string are : ",substr($sentence,0,20)."<br>";

?>