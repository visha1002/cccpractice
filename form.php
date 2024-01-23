<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['product-name'];
    $sku = $_POST['Sku'];
    if(isset($_POST['submit'])){
        $product_type = $_POST['rbtn'];
    }
    $category = $_POST['category'];
    $m_cost = $_POST['mcost'];
    $s_cost = $_POST['scost'];
    $t_cost = $_POST['tcost'];
    $price = $_POST['price'];
    $status = $_POST['status'];

    // connecting to the Database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ccc_practice";

    //Create a connection

    $connect = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO `ccc_product` (`id`, `product_name`, `sku`, `product_type`, `category`, `m_cost`, `s_cost`, `t_cost`, `price`, `status`, `created_at`, `updated_at`) VALUES (NULL, '$name', '$sku', '$product_type', '$category', '$m_cost', '$s_cost', '$t_cost', '$price', '$status', current_timestamp(), current_timestamp())";
    $result = mysqli_query($connect, $sql);

    if($result){
        echo '<div class="alert alert-success" role="alert">Your entry has been submitted successfully !</div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert">Could not enter your entry !</div>';
    }
    
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .center {
            margin : 20px;
            text-align: center;

        }
        input[type=text] {
            width: 60%;
            padding: 10px 15px;
            margin: 6px 10px;
            box-sizing: border-box;
        }
        label{
            font-size:16px;
        }
        .radiolabel {
            width: 100%;    text-align: left;    padding-left: 220px;  
        }
        .radiobtn{
            width: 55%;
        }
        .category {
            margin: 15px;
        }
        .heading {
            padding-left: 80px;
        }
        #categories{
            width: 40%;
            text-align: center;
            height: 35px;
            margin-left : 40px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
    <form action="/visha/form.php" method="post">
    <div class="center">
        <h1>PHP form</h1>
        <div class="form-group row">
        <label for="">Product Name : </label>
        <input type="text" placeholder="Enter your product name" name="product-name" id="">
        </div>
        <div class="form-group row">
        <label for="">SKU : </label>
        <input style="margin-left:80px" type="text" placeholder="Enter your product SKU number" name="Sku" id="">
        </div>
        <label for="" class="radiolabel">Product Type :</label>
        <div class="form-group-row radiobtn">
        <input type="radio" name="rbtn" value="Simple">
        <label for="">Simple</label>
        </div>
        <div class="form-group-row radiobtn">
        <input type="radio" name="rbtn" value="Bundle">
        <label for="">Bundle</label>
        <div class="category">
            <label for="Category" class="heading">Category :</label>
            <select name="category" id="categories">
            <option value="Bar & Game Room">Bar & Game Room</option>
            <option value="BedRoom">BedRoom</option>
            <option value="Decor">Decor</option>
            <option value="Dining & Kitchen">Dining & Kitchen</option>
            <option value="Lighting">Lighting</option>
            <option value="Living Room">Living Room</option>
            <option value="Mattresses">Mattresses</option>
            <option value="Office">Office</option>
            <option value="Outdoor">Outdoor</option>
            </select>
        </div>
        <div style="margin-left:125px" class="form-group-row">
        <label for="">Manufacturer cost : </label>
        <input type="text" placeholder="Manufacurer cost" name="mcost" id="">
        </div>
        <div style="margin-left:146px" class="form-group-row">
        <label for="">Shipping cost : </label>
        <input type="text" placeholder="shipping cost" name="scost" id="">
        </div>
        <div style="margin-left:167px" class="form-group-row">
        <label for="">Total cost : </label>
        <input type="text" placeholder="Total cost" name="tcost" id="">
        </div>
        <div style="margin-left:190px" class="form-group-row">
        <label for="">Price : </label>
        <input type="text" placeholder="Enter Price" name="price" id="">
        </div>
        <div class="category">
            <label style="padding-left:100px" for="Category" class="heading">Status :</label>
            <select name="status" id="categories">
            <option value="Enabled">Enabled</option>
            <option value="Disabled">Disabled</option>
            </select>
        </div>
        <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>