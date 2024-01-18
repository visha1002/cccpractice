<?php

  $str = "Hello Good Morning";
  echo "The string is : ",$str."<br>";
  
  //  strlen function ------ length
  echo "The length of the given string is : ",strlen($str)."<br>";
  
  //  str_replace function ------- replace
  echo "String after replacement is : ",str_replace("Morning","Afternoon",$str)."<br>";
  
  //  strpos function -------- position
  echo "Position of Good in given string is : ",strpos($str,"Good")."<br>";
  
  //  substr function ------- get substring
  echo "substring from 0 to 8: ",substr($str, 0, 8)."<br>";
  
  // strtolower function
  echo "String in lower case: ",strtolower($str)."<br>";
  
  // strtoupper function
   echo "string in upper case : ",strtoupper($str)."<br>";
  
   // trim function ------- trim from front and end
   echo "trim functions: ";
   echo trim($str, "Heg")."<br>";
   echo ltrim($str,"Heg")."<br>";
   echo rtrim($str,"Heg")."<br>";
   echo chop($str, "Heg")."<br>";  // same as rtrim
   
   // implode function ------- Array to String
    $colors = array('red','blue','green','black');
    print_r($colors);
    echo "<br>";
    echo implode(" ", $colors)."<br>";

    // explode function -------- String to Array
    $set = "This is string function program";
    echo $set."<br>";
    print_r(explode(" ", $set));
    echo "<br>";

    // htmlspecialchars function
    $str1 = "<Click> and learn";
    echo $str1."<br>";
    echo htmlspecialchars($str1)."<br>";
    echo htmlentities($str1)."<br>";

    // htmlentities function
    $str2 = '<a href="https://www.facebook.com">Go to Facebook.com</a>';
    echo $str2."<br>";
    echo htmlentities($str2)."<br>";
    echo htmlspecialchars($str2)."<br>";

    // nl2br function -------- for print in new line
    echo "first line. \n second line."."<br>";
    echo nl2br("first line. \n second line.")."<br>";

    // str_repeat function -------- repeat string given times
    echo str_repeat($str ,14)."<br>";

    // strrev function
    echo strrev($str)."<br>";

    //str_shuffle function
    echo str_shuffle($str)."<br>";
    echo str_shuffle($str)."<br>";

    // str_split function ------- convert every letter into array
    print_r(str_split($str));
    echo "<br>";

    //str_word_count function
    echo "Total word in string are : ",str_word_count($str)."<br>";

    // substr_replace function
    echo substr_replace($str, "Nice", 6, 4)."<br>";

    // str_pad function
    echo str_pad($str, 35, "!")."<br>";

    // strcmp function
    $string1 = "My name is Visha";
    $string2 = "her name is karuna";
    echo strcmp($string1, $string2)."<br>";

    // strcoll function
    echo strcoll($string1, $string2)."<br>";

    // strcspn function
    echo "total letter before letter n in string is : ",strcspn($str,"n")."<br>";

    //stristr function ---- case in sensitive---- first occurrence of substring
    echo stristr($str, "oD")."<br>";
    echo stristr($str, "oD", true)."<br>";

    // strpbrk function --- case sensitive --- first occurrence of substring letters
    echo strpbrk($str, "lm")."<br>";

    //strstr function
    echo strstr($str, "Mor")."<br>";
    echo strstr($str, "Mor", true)."<br>";

    // strtr function
    $str0 = "keep this";
    echo $str0."<br>";
    echo strtr("$str0","is","at")."<br>";

    // ucfirst function
    echo ucfirst($str0)."<br>";
    echo lcfirst($str0)."<br>";

    // ucwords function
    echo ucwords($str0)."<br>";

    // wordwrap function --- wrap string into new lines when reach length
    echo wordwrap($str,6,"<br>")."<br>";

    // join function ----- same as implode
    $arr = array('Hey', 'there', 'How', 'are', 'you?');
    echo join(" ", $arr)."<br>";

    // levenshtein function ---- (distance) means no.of chars to change for transform 1 into 2
    $ab = "abcdefg";
    $abc = "abcdefghi878";
    echo levenshtein($ab, $abc)."<br>";

    // count similar letters between two strings
    echo similar_text($ab, $abc)."<br>";
    var_dump($str);

?>