<?php

    include_once('functions.php');
    if(isset($_POST['submit'])){
        $p_data = $_POST['p_data'];
    }

    // print_r($p_data);

    //connection to database
    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "catalog";

    $connection = mysqli_connect($servername, $user, $password, $database);

    // Insert function call
    /* $sql_insert = insert('ccc_product', $p_data);
    $result_i = mysqli_query($connection, $sql_insert);
    if($result_i){
        echo "Data has been inserted successfully !";
    }
    else{
        echo "Failed to insert !";
    }
    */

    // Update function call

    /* $sql_update = update('ccc_product', $p_data, ['product_id' => 5]);
    $result_u = mysqli_query($connection, $sql_update);

    if($result_u){
        echo "Your data has been updated successfully !";
    }
    else{
        echo "Failed to update !";
    }
    */

    // Delete function call

    /* $sql_delete = delete('ccc_product', ['category' => "Office"]);
    $result_d = mysqli_query($connection, $sql_delete);

    if($result_d){
        echo "data has been deleted successfully !";
    }
    else{
        echo "failed to delete !";
    }
    */
    // select function call

    /* $sql_select = select('ccc_product', '*', NULL);
    $result_s = mysqli_query($connection, $sql_select);

    $obj = mysqli_fetch_object($result_s);

    do{
        echo("ID: ".$obj->product_id."&nbsp. ");
        echo("Product_Name: ".$obj->product_name."&nbsp. ");
        echo("Sku number : ".$obj->sku."&nbsp. ");
        echo("Product Type: ".$obj->product_type."&nbsp. ");
        echo("Category: ".$obj->category."&nbsp. ");
        echo("Marginal cost: ".$obj->m_cost."&nbsp. ");
        echo("Shipping cost: ".$obj->s_cost."&nbsp. ");
        echo("Total cost: ".$obj->t_cost."&nbsp. ");
        echo("Price: ".$obj->price."&nbsp. ");
        echo("status: ".$obj->status."&nbsp. ");
        echo("Created At: ".$obj->created_at."&nbsp. ");
        echo("Updated At: ".$obj->updated_at."&nbsp");
        echo "<br>";
    }while($obj = mysqli_fetch_object($result_s));

    */
?>