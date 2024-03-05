<?php
include_once 'functions_in_class.php';
include_once 'fetch_by_object.php';

$executer = new Query_Executer();

$conn = $executer->Connection('localhost', 'root', '', 'catalog');
// for printing value in form if edit is clicked

$pid = isset($_GET['product_id']) ? $_GET['product_id'] : 0;
$sql = $executer->select('ccc_product', '*', ["where" => ['product_id' => $pid]]);
$result = $executer->fetch($conn, $sql);

if (isset($_POST['submit'])) {
    $data = $_POST['p_data'];
    if (count($result) > 0 && isset($_GET['product_id']) && !empty($_GET['product_id'])) {
        $sql_update = $executer->update('ccc_product', $data, ['product_id' => $pid]);
        $executer->query($conn, $sql_update);
        header("Location:listing.php");
    } else {
        $query = $executer->insert('ccc_product', $data);
        $executer->query($conn, $query);
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql_delete = $executer->delete('ccc_product', ['product_id' => $id]);
    $executer->query($conn, $sql_delete);
}

?>