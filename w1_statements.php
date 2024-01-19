<?php
    $marks = 75;
    $student = 2;

    echo("------- If statement ---------")."<br><br>";
    if($marks > 35){
        echo "Pass"."<br><br>";
    }

    echo("------- If-else statement ---------")."<br><br>";
    if($marks > 50){
        echo "This is If block"."<br><br>";
    }
    else{
        echo "This is else block"."<br><br>";
    }

    echo("------- If-elseIf-else statement ---------")."<br><br>";
    if($marks > 80){
        echo "First class"."<br><br>";
    }
    else if($marks > 60){
        echo "Second class"."<br><br>";
    }
    else if($marks > 35){
        echo "Third class"."<br><br>";
    }
    else{
        echo " failed !"."<br><br>";
    }

    echo("------- Nested if-else statement ---------")."<br><br>";
    if($marks > 50){
        if($student == 1){
            echo "1st student gets $marks marks."."<br><br>";
        }
        elseif($student == 2){
            echo "2nd student gets $marks marks"."<br><br>";
        }
        else{
            echo "3rd student gets $marks marks"."<br><br>";
        }
    }
    else{
        echo "None of the student gets 50 marks"."<br><br>";
    }
?>