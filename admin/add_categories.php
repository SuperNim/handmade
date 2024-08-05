<?php
include './DB.php';

$name_categories = $_POST['title'];
$description = $_POST['description'];

$pdo = newPDO();

$sql = "INSERT INTO `categories` (`id`, `title`, `description`) 
VALUES (NULL, '$name_categories', '$description')";

$result = $pdo->query($sql);
header("location: ./all_categories.php");