<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Form</title>
</head>
<body>
<form action="class_call.php" method="post">
    <div class="center">
        <h1>PHP form</h1>
        <div class="form-group row">
        <label for="">Product Name : </label>
        <input type="text" placeholder="Enter your product name" name="data[product_name]" id="">
        </div>
        <div class="form-group row">
        <label for="">SKU : </label>
        <input style="margin-left:80px" type="text" placeholder="Enter your product SKU number" name="data[Sku]" id="">
        </div>
        <label for="" class="radiolabel">Product Type :</label>
        <div class="form-group-row radiobtn">
        <input type="radio" name="data[rbtn]" value="Simple">
        <label for="">Simple</label>
        </div>
        <div class="form-group-row radiobtn">
        <input type="radio" name="data[rbtn]" value="Bundle">
        <label for="">Bundle</label>
        <div class="category">
            <label for="Category" class="heading">Category :</label>
            <select name="data[category]" id="categories">
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
        <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="update" class="btn btn-primary">Update</button>
        <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="delete" class="btn btn-primary">Delete</button>
    </form>
</body>
</html>