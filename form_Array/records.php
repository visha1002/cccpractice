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
    echo "<br>";
    echo "--------------------------------------------";
    echo "<br>";
    $s_fun = select('*', 'ccc_product', 'ORDER BY id DESC LIMIT 10');

    $result_fun = mysqli_query($conn, $s_fun);

    $obj = mysqli_fetch_object($result_fun);
    do{        
        echo("ID: ".$obj->id."&nbsp. ");
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
    }while($obj = mysqli_fetch_object($result_fun));
?>