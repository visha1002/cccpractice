<?php
    include_once 'class_function.php';

    $execute = new Query_Executor();

    $conn = $execute->connection('localhost','root','','practice');

    if(isset($_POST['submit'])){
        $data = $_POST['data'];
        $query=$execute->insert('products', $data);
        $execute->query($conn,$query);
    }

    if(isset($_POST['update'])){
        $data = $_POST['data'];
        $query = $execute->update('products',$data, ['id' => 2]);
        $execute->query($conn,$query);
    }
    
    if(isset($_POST['delete'])){
        $data = $_POST['data'];
        $query = $execute->delete('products', ['id' => 2]);
        $execute->query($conn,$query);
    }
?>