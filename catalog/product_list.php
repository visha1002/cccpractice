<?php
    include_once('C:\xampp\htdocs\visha\catalog\sql\connections.php');

    /* $sql_select = select('ccc_product', '*', 'ORDER BY product_id DESC LIMIT 20');
    $result_s = mysqli_query($connection, $sql_select);

    $obj = mysqli_fetch_object($result_s);
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
                <td>$obj->product_id</td>
                <td>$obj->product_name</td>
                <td>$obj->sku</td>
                <td>$obj->product_type</td>
                <td>$obj->category</td>
                <td>$obj->m_cost</td>
                <td>$obj->s_cost</td>
                <td>$obj->t_cost</td>
                <td>$obj->price</td>
                <td>$obj->status</td>
                <td>$obj->created_at</td>
                <td>$obj->updated_at</td>
            </tr>
            </table>
            ";
    }while($obj = mysqli_fetch_object($result_s));
    */

    $sql_select = select('ccc_product', 'product_name,sku,category', 'ORDER BY product_id DESC LIMIT 20');
    $result_s = mysqli_query($connection, $sql_select);

    $obj = mysqli_fetch_object($result_s);
    // print name,category,sku records 
    echo "
    <table>
    <tr>
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
                <td>$obj->product_name</td>
                <td>$obj->sku</td>
                <td>$obj->category</td>
                <th><a href='product.php'/>Edit</a></th>
                <th><a href='product.php'/>Delete</a></th>
            </tr>
            </table>
            ";
    }while($obj = mysqli_fetch_object($result_s));

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
