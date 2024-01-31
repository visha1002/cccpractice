<?php
    include_once('C:\xampp\htdocs\visha\catalog\sql\connections.php');
    /*
     $sql_select = select('ccc_product', '*', 'ORDER BY product_id DESC LIMIT 20');
    $result_s = mysqli_query($connection, $sql_select);

    $row = mysqli_fetch_assoc($result_s);
    // print 20 records 
    echo "
    <table>
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>SKU number</th>
        <th>Product Type</th>
        <th>Category</th>
        <th>Marginal cost</th>
        <th>Shipping cost</th>
        <th>Total cost</th>
        <th>Price</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </table>
    ";
    do {
        echo "
        <table>
            <tr>
                <td>$row[product_id]</td>
                <td>$row[product_name]</td>
                <td>$row[sku]</td>
                <td>$row[product_type]</td>
                <td>$row[category]</td>
                <td>$row[m_cost]</td>
                <td>$row[s_cost]</td>
                <td>$row[t_cost]</td>
                <td>$row[price]</td>
                <td>$row[status]</td>
                <td>$row[created_at]</td>
                <td>$row[updated_at]</td>
            </tr>
            </table>
            ";
            $row = mysqli_fetch_assoc($result_s);
    }while($row);
    */

    $sql_select = select('ccc_product', 'product_id,product_name,sku,category', 'ORDER BY product_id DESC LIMIT 20');
    $result_s = mysqli_query($connection, $sql_select);

    $row = mysqli_fetch_assoc($result_s);
    // print name,category,sku records 
    echo "
    <table>
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>SKU number</th>
        <th>Category</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </table>
    ";
    do {
        echo "
        <table>
            <tr>
                <td>$row[product_id]</td>
                <td>$row[product_name]</td>
                <td>$row[sku]</td>
                <td>$row[category]</td>
                <th><a href='product.php'/>Edit</a></th>
                <th><a href='product_list.php?product_id=".$row['product_id']."'/>Delete</a></th>
            </tr>
            </table>
            ";
            $row = mysqli_fetch_assoc($result_s);
    }while($row);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
    table, th, td {
    border:1px solid black;
    }
    table{
        width: 100%;
        table-layout: fixed;
    }
</style>
</head>
<body>
    
</body>
</html>
