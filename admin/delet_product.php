<?php
include './DB.php';

$product = $_GET ['id'];
$pdo = newPDO();
$sql = "DELETE FROM products WHERE id=$product";
$result = $pdo->query($sql);
header("location: ./all_product.php");
?>
