<?php
include './DB.php';

$categorie = $_GET ['id'];
$pdo = newPDO();
$sql = "DELETE FROM categories WHERE id=$categorie";
$result = $pdo->query($sql);
header("location: ./all_categories.php");
?>
