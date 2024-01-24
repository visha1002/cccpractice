<?php
    include_once('connection.php');

    $s_query = "SELECT * FROM `ccc_product` ORDER BY id DESC LIMIT 10;";

    $results = mysqli_query($conn, $s_query);

    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            echo "
            <ul>
                <li>$row[id].
                $row[product_name].
                $row[sku].
                $row[product_type].
                $row[category].
                $row[m_cost].
                $row[s_cost].
                $row[t_cost].
                $row[price].
                $row[status].
                $row[created_at].
                $row[updated_at]</li>
            </ul>
            ";
        }
    }
    // if(mysqli_num_rows($results)>0){
    //     while($row = mysqli_fetch_assoc($results)){
    //         echo "id : " . $row["id"]
    //         . " - product name : " . $row["product_name"]
    //         . " - SKU number : " . $row["sku"]
    //         . " - Product type : " . $row["product_type"]
    //         . " - Category : " . $row["category"]
    //         . " - Marginal cost : " . $row["m_cost"]
    //         . " - Shipping cost : " . $row["s_cost"]
    //         . " - Total cost : " . $row["t_cost"]
    //         . " - Price : " . $row["price"]
    //         . " - Status : " . $row["status"]
    //         . " - Created At : " . $row["created_at"]
    //         . " - Updated At : " . $row["updated_at"] . "<br>";
    //     }
    // }
    else{
        echo "0 Results";
    }

?>