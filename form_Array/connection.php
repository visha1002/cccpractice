<?php
    include_once('form_fun.php');
    if(isset($_POST['submit'])){
        $p_data = $_POST['p_data'];
    }
    

    // print_r($p_data);

    // connecting to database
    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "ccc_practice";

    $conn = mysqli_connect($servername, $user, $password, $database);

    // Insert function
    /*
     $sql = insert('ccc_product', $p_data);

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "your entry has been added sucessfully !";
    }
    else{
        echo "failed !";
    }
    */

    // Update Function 

    /*
    $sqlupdate = update('ccc_product', $p_data, ['product_name' => ""]);
    // echo $sqlupdate;
    $update_re = mysqli_query($conn, $sqlupdate);

    if($update_re){
        echo "Entry has been updated successfully !";
    }
    else{
        echo "failed to update !";
    }
    */

    // Delete Function

    /* $sqldelete = delete('ccc_product', ['category' => "Office"]);
    $delete_re = mysqli_query($conn, $sqldelete);

    if($delete_re){
        echo "Your recoed has been deleted !";
    }
    else{
        echo "cound not delete your record !";
    }
    */

    // select('*', 'ccc_product', NULL);
?>