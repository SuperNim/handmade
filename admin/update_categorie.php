<?php
include './check_admin.php';
include './DB.php';

$categorie = $_POST ['id'];
$name = $_POST['name_categories'];
$description = $_POST['description'];


$pdo = newPDO();
$sql = "UPDATE `categories` SET `title` = '$name', `description` = '$description' WHERE id = $categorie;";
$result = $pdo->query($sql);
header("location: ./all_categories.php");

