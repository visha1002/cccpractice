<?php
    echo "Array Creation and Initialization : "."<br>"."<br>";
    $array1 = array(56,79,224,"abc", "hij", 56.8,90,99);
    $array2 = [78,46,80, "bjs", "oho", 456.7,66.90];
    $array3 = array("name"=>"visha", "age"=>20, "city"=>"vadodara");

    print_r($array1);
    echo "<br>";
    print_r($array2);
    echo "<br>";
    print_r($array3);
    echo "<br>";
    print_r(array_merge($array1,$array2)); // merge function
    echo "<br>";
    $merge = array_merge($array1,$array2,$array3); // merge indexed and associative array
    print_r($merge);
    echo "<br>";

    $sName = ["Vinod","Radha","Payal","Sultan"];
    $sMark = [67,78,90,45];

    $comArr = array_combine($sName,$sMark); // combine array key to values
    print_r($comArr);
    echo "<br>";

    $range = range(5,107,20); // prints array from starting range to end range
    print_r($range);
    echo "<br>";
    $abc = range('a', 'z',4);
    print_r($abc);
    echo "<br>"."<br>";

    echo "Array Modification : "."<br>"."<br>";

    $arr = ["cat","dog","goat","zebra"];
    array_push($arr,"pig","camel"); // push value to already defined array
    print_r($arr);
    echo "<br>";
    array_pop($arr); // remove last element of array
    print_r($arr);
    echo "<br>";

    array_unshift($arr, "elephant","horse"); // adds new elements to the starting of the array
    print_r($arr);
    echo "<br>";
    array_shift($arr); // removes array element from the starting
    print_r($arr);
    echo "<br>";

    $newarr = ["parrot","peacock","swan"];
    print_r(array_splice($arr, 0, 4, $newarr)); // replaces array elements from given position and returns removed elements
    echo "<br>";
    print_r($newarr);
    echo "<br>";
    print_r($arr);
    echo "<br>"."<br>";

    echo "Array Access : "."<br>"."<br>";
    echo "The total elements in the array is : ",count($arr)."<br>"; // count elements in array
    echo "Size of the array is ",sizeof($arr)."<br>"; // same as count

    // check is key exists in array
    if(array_key_exists("Vinod",$comArr)){
        echo "key exist !"."<br>";
    }
    else{
        echo "key does not exist !"."<br>";
    }

    print_r(array_keys($comArr)); // returns all the keys
    echo "<br>";
    print_r(array_keys($comArr, 90)); // returns key whose value is 90
    echo "<br>";

    print_r(array_values($comArr)); // returns all the values of the array
    echo "<br><br>";

    echo "Array Search : "."<br>"."<br>";
    //in_array checks value is present in the array or not

    if(in_array("peacock",$arr)){
        echo "peacock is present in the array<br>";
    }
    else{
        echo "peacock is not present in the array<br>";
    }

    echo array_search(90, $comArr)."<br>"; // returns key of given value
    print_r(array_reverse($comArr)); // reverse an array
    echo "<br><br>";

    echo "Array Sort : <br>"."<br>";
    $a = array(56,78.4,90,2434,46,1,78.9,"hello","a");
    sort($a); // sort array
    print_r($a);
    echo "<br>";
    rsort($a); // sort array in reverse
    print_r($a);
    echo "<br>";
    asort($comArr); // sort associative array by values
    print_r($comArr);
    echo "<br>";
    ksort($comArr); // sort associative array by keys
    print_r($comArr);
    echo "<br>";
    arsort($comArr); // sort associative array by values reverse
    print_r($comArr);
    echo "<br>";
    krsort($comArr); // sort associative array by keys reverse
    print_r($comArr);
    echo "<br><br>";

    echo "Array Filter : <br>"."<br>";
    $b = [5,2,32,6,5,5,5,1,2,32];
    function filter($var){
        if($var > 10){
            return $var + 1;
        }
    }
    function myfun($var1, $var2){
        return $var1 . "---" . $var2;
    }
    print_r(array_filter($b, "filter")); // sends value to function and if function returns with true then it prints it
    echo "<br>";
    print_r(array_map("filter",$b)); // sends value to function and returns value which function returns and stores in array
    echo "<br>";
    print_r(array_reduce($arr,"myfun")); // sends value to function and returns a string (reduce to a single value)
    echo "<br><br>";

    echo "Array Slicing : <br>"."<br>";
    print_r(array_slice($arr,0,3)); // slice array to 0 to 3 elements
    echo "<br>";
    
?>