<?php
    include_once "category_conn.php";

    $select = select('ccc_category','*', NULL);
    $ans = mysqli_query($connection, $select);
    
    $obj = mysqli_fetch_object($ans);

    echo "
    <table>
    <tr>
        <th>Category Id</th>
        <th>Category Name</th>
    </tr>
    </table>
    ";
    do{
        echo "
        <table>
        <tr>
            <td>$obj->cat_id</td>
            <td>$obj->name</td>
        </tr>
        </table>
        ";
    }while($obj = mysqli_fetch_object($ans));
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