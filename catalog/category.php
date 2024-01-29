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
        <form action="category_conn.php" method="post">
            <div class="center">
                <h1>Category form</h1>
                <br>
                <div class="form-group row">
                <label for="">category Name : </label>
                <input type="text" placeholder="Enter Category name" name="c_data[name]" id="">
            </div>
            <br>
                <button style="width:15%; margin:15px; margin-left:150px" type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>  
</html> 