<?php
include "db.php";
$id = $_GET['id'];

$check = $conn->query("SELECT * FROM cart WHERE product_id=$id");
if($check->num_rows > 0){
    $conn->query("UPDATE cart SET quantity = quantity + 1 WHERE product_id=$id");
}else{
    $conn->query("INSERT INTO cart (product_id, quantity) VALUES ($id,1)");
}

header("Location: cart.php");
?>
