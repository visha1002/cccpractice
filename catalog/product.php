<?php

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <style>
        * {
            margin-left : 8px;
        }
    </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form in Array</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <form action="sql/connections.php" method="post">
            <div class="center">
                <h1>PHP form</h1>
                <div class="form-group row">
                <label for="">Product Name : </label>
                <input type="text" placeholder="Enter your product name" name="p_data[product_name]" id="">
                </div>
                <br>
                <div class="form-group row">
                <label for="">SKU : </label>
                <input style="margin-left:60px" type="text" placeholder="Enter your product SKU number" name="p_data[sku]" id="">
                </div>
                <br>
                <label for="" class="radiolabel">Product Type :</label>
                <div class="form-group-row radiobtn">
                <input type="radio" name="p_data[product_type]" value="Simple">
                <label for="">Simple</label>
                </div>
                <div class="form-group-row radiobtn">
                <input type="radio" name="p_data[product_type]" value="Bundle">
                <label for="">Bundle</label>
                <br>
                <br>
                <div class="category">
                    <label for="Category" class="heading">Category :</label>
                    <select name="p_data[category]" id="categories">
                    <option disabled selected value="">--Select an option--</option>
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
                <br>
                <div class="form-group-row">
                <label for="">Manufacturer cost : </label>
                <input type="text" placeholder="Manufacurer cost" name="p_data[m_cost]" id="">
                </div>
                <br>
                <div class="form-group-row">
                <label for="">Shipping cost : </label>
                <input type="text" placeholder="shipping cost" name="p_data[s_cost]" id="">
                </div>
                <br>
                <div class="form-group-row">
                <label for="">Total cost : </label>
                <input type="text" placeholder="Total cost" name="p_data[t_cost]" id="">
                </div>
                <br>
                <div class="form-group-row">
                <label for="">Price : </label>
                <input type="text" placeholder="Enter Price" name="p_data[price]" id="">
                </div>
                <br>
                <div class="category">
                    <label for="Category" class="heading">Status :</label>
                    <select name="p_data[status]" id="categories">
                    <option disabled selected value="">--Select an option--</option>
                    <option value="Enabled">Enabled</option>
                    <option value="Disabled">Disabled</option>
                    </select>
                </div>
                <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="update" class="btn btn-primary">Update</button>
                <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="delete" class="btn btn-primary">Delete</button>
            </form>
    </body>
    </html>
