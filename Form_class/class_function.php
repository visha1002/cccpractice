<?php

class Query_Builder {

    public function insert($tablename, $data){
        $columns = $values = [];
        foreach ($data as $field => $value){
            $columns[] = "`{$field}`";
            $values[] = "'" . addslashes($value) . "'";
        } 
        $columns = implode(", ",$columns);
        $values = implode(", ", $values);

        return "INSERT INTO {$tablename} ({$columns}) VALUES ({$values});";
    }

    public function update($tablename, $data, $where){
        $columns = $wherecondi = [];

        foreach ($data as $field => $value){
            $columns[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        foreach ($where as $field => $value){
            $wherecondi[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        $columns = implode(", ",$columns);
        $wherecondi = implode(", ", $wherecondi);

        return "UPDATE {$tablename} SET {$columns} WHERE {$wherecondi};";
    }

    public function delete($tablename, $where){
        $wherecondi = [];
        foreach ($where as $field => $value){
            $wherecondi[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        $wherecondi = implode(", ",$wherecondi);

        return "DELETE FROM {$tablename} WHERE {$wherecondi};";
    }

    public function select($tablename, $val, $extra){
        if($val == '*'){
            echo "
        <table>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>SKU number</th>
            <th>Product Type</th>
            <th>Category</th>
        </tr>
        </table>
        ";
        }
        else{
        $column = [];
        $column = explode(",",$val);
        $count = count($column);
        echo "<table>";
        for($i=0; $i<$count; $i++){
            echo "<td><b>".($column[$i]). "</b></td>";
        }
        echo "</table>";
        }
        return "SELECT {$val} FROM {$tablename} {$extra};";
    }
}

class Query_Executor extends Query_Builder{
    public function connection($server, $user, $password, $database) {
        $connection = mysqli_connect($server,$user,$password,$database);
        // if($connection){
        //     echo "connected successfully<br>";
        // }
        // else{
        //     echo "failed to connect";
        // }
        return $connection;
    }

    public function query($connection, $que){
        $result = mysqli_query($connection, $que);
        // if($result){
        //     echo "Query executed successfully!<br>";
        // }
        // else{
        //     echo "Failed to execute!";
        // }
        return $result;
    }

    public function fetch($result){
        $row = [];
        echo "<table>";       
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            foreach($row as $data){
                echo "<td>";
                echo $data;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Form</title>
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