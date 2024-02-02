<?php
include_once 'functions_in_class.php';
include_once 'connections_call.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin-left: 8px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in Array</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <form action="html_form.php?product_id = <?php echo $pid ?>" method="post" >
        <div class="center">
            <h1>PHP form</h1>
            <div class="form-group row">
                <label for="">Product Name : </label>
                <input type="text" placeholder="Enter your product name" name="p_data[product_name]" id="" value="<?php if(count($result) > 0) { echo $result[0]['product_name']; } ?>">
            </div>
            <br>
            <div class="form-group row">
                <label for="">SKU : </label>
                <input style="margin-left:60px" type="text" placeholder="Enter your product SKU number"
                    name="p_data[sku]" id="" value=<?php if(count($result) > 0){echo $result[0]['sku'];}?>>
            </div>
            <br>
            <label for="" class="radiolabel">Product Type :</label>
            <div class="form-group-row radiobtn">
                <input type="radio" name="p_data[product_type]" value="Simple" <?php if(count($result) > 0 && $result[0]['product_type'] == 'Simple') { echo 'checked'; } ?>>
                <label for="">Simple</label>
            </div>
            <div class="form-group-row radiobtn">
                <input type="radio" name="p_data[product_type]" value="Bundle" <?php if(count($result) > 0 && $result[0]['product_type'] == 'Bundle') { echo 'checked'; } ?>>
                <label for="">Bundle</label>
                <br>
                <br>
                <div class="category">
                    <label for="Category" class="heading">Category :</label>
                    <select name="p_data[category]" id="categories">
                        <option value="Bar & Game Room" <?php if(count($result) > 0 && $result[0]['category'] == 'Bar & Game Room') {echo "selected";} ?>>Bar & Game Room</option>
                        <option value="BedRoom" <?php if(count($result) > 0 && $result[0]['category'] == 'BedRoom') {echo "selected";} ?>>BedRoom</option>
                        <option value="Decor" <?php if(count($result) > 0 && $result[0]['category'] == 'Decor') {echo "selected";} ?>>Decor</option>
                        <option value="Dining & Kitchen" <?php if(count($result) > 0 && $result[0]['category'] == 'Dining & Kitchen') {echo "selected";} ?>>Dining & Kitchen</option>
                        <option value="Lighting" <?php if(count($result) > 0 && $result[0]['category'] == 'Lighting') {echo "selected";} ?>>Lighting</option>
                        <option value="Living Room" <?php if(count($result) > 0 && $result[0]['category'] == 'Living Room') {echo "selected";} ?>>Living Room</option>
                        <option value="Mattresses" <?php if(count($result) > 0 && $result[0]['category'] == 'Mattresses') {echo "selected";} ?>>Mattresses</option>
                        <option value="Office" <?php if(count($result) > 0 && $result[0]['category'] == 'Office') {echo "selected";} ?>>Office</option>
                        <option value="Outdoor" <?php if(count($result) > 0 && $result[0]['category'] == 'Outdoor') {echo "selected";} ?>>Outdoor</option>
                    </select>
                </div>
                <br>
                <div class="form-group-row">
                    <label for="">Manufacturer cost : </label>
                    <input type="text" placeholder="Manufacurer cost" name="p_data[m_cost]" id="" value=<?php if(count($result) > 0){echo $result[0]['m_cost'];}?>>
                </div>
                <br>
                <div class="form-group-row">
                    <label for="">Shipping cost : </label>
                    <input type="text" placeholder="shipping cost" name="p_data[s_cost]" id="" value=<?php if(count($result) > 0){echo $result[0]['s_cost'];}?>>
                </div>
                <br>
                <div class="form-group-row">
                    <label for="">Total cost : </label>
                    <input type="text" placeholder="Total cost" name="p_data[t_cost]" id="" value=<?php if(count($result) > 0){echo $result[0]['t_cost'];}?>>
                </div>
                <br>
                <div class="form-group-row">
                    <label for="">Price : </label>
                    <input type="text" placeholder="Enter Price" name="p_data[price]" id="" value=<?php if(count($result) > 0){echo $result[0]['price'];}?>>
                </div>
                <br>
                <div class="category">
                    <label for="Category" class="heading">Status :</label>
                    <select name="p_data[status]" id="categories">
                        <option disabled selected value="">--Select an option--</option>
                        <option value="Enabled" <?php if(count($result) > 0 && $result[0]['status'] == 'Enabled') {echo "selected";} ?>>Enabled</option>
                        <option value="Disabled" <?php if(count($result) > 0 && $result[0]['status'] == 'Disabled') {echo "selected";} ?>>Disabled</option>
                    </select>
                </div>
                <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>