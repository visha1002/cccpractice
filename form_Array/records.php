<?php
    include_once('connection.php');

    $s_query = "SELECT * FROM `ccc_product`;";

    $results = mysqli_query($conn, $s_query);

    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            echo "product name : " . $row["product_name"]
            . " - SKU number : " . $row["sku"]
            . " - Product type : " . $row["product_type"]
            . " - Category : " . $row["category"]
            . " - Marginal cost : " . $row["m_cost"]
            . " - Shipping cost : " . $row["s_cost"]
            . " - Total cost : " . $row["t_cost"]
            . " - Price : " . $row["price"]
            . " - Status : " . $row["status"]
            . " - Created At : " . $row["created_at"]
            . " - Updated At : " . $row["updated_at"] . "<br>";
        }
    }
    else{
        echo "0 Results";
    }

?>