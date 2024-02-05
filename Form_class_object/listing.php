<?php
include_once 'connections_call.php';
$query = $executer->select('ccc_product', '*', []);

$values = $executer->fetch($conn,$query);
$object = new Data_Collection_Object();

foreach($values as $val){
    $object->addData($val);
}

foreach($object->getData() as $newData){
    echo "<table>";
    echo "<tr>";
    echo "<td>" .$newData->getproduct_id() . "</td>";
    echo "<td>" .$newData->getproduct_name() . "</td>";
    echo "<td>" .$newData->getsku() . "</td>";
    echo "<td>" .$newData->getproduct_type() . "</td>";
    echo "<td>" .$newData->getcategory() . "</td>";
    echo "<td>" .$newData->getm_cost() . "</td>";
    echo "<td>" .$newData->gets_cost() . "</td>";
    echo "<td>" .$newData->gett_cost() . "</td>";
    echo "<td>" .$newData->getprice() . "</td>";
    echo "<td>" .$newData->getstatus() . "</td>";
    echo "<td>" .$newData->getcreated_at() . "</td>";
    echo "<td>" .$newData->getupdated_at() . "</td>";
    echo "<td><a href='html_form.php?product_id=".$newData->getproduct_id()."'/>Edit</a></td>";
    echo "<td><a href='listing.php?delete=".$newData->getproduct_id(). "'/>Delete</a></td>";
    echo "</tr>";
    echo "</table>";
}
?>
 <!DOCTYPE html>
    <style>
        table, th, td {
        border:1px solid black;
    }
    table{
        width: 100%;
        table-layout: fixed;
    }
    </style>
    </html>