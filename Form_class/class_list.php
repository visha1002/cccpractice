<?php
    include_once 'class_call.php';

    $query = $execute->select('products', '*', NULL);
    $results = $execute->query($conn,$query);
    $execute->fetch($results);
?>