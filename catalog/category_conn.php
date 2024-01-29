<?php
    include_once "sql/connections.php";
    include_once "sql/functions.php";

    if(isset($_POST['submit'])){
        $c_data = $_POST['c_data'];
        $query = insert('ccc_category', $c_data);
        $result = mysqli_query($connection, $query);
        if($result){
            echo "Entry has been added successfully !";
        }
        else{
            echo "Failed to enter !";
        }
    }    
?>