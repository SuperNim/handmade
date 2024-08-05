<?php
include './check_admin.php';
include './DB.php';


$product = $_POST ['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$count = $_POST['count'];
$date = $_POST['date'];
$short_description= $_POST['short_description'];
$long_description = $_POST['long_description'];
$category_id = $_POST['category_id'];

$pdo = newPDO();

$sql = "UPDATE `products` SET `title` = '$name', `price` = '$price', `count` = '$count', `date` = '$date' , `short_description` = '$short_description', `long_description` = '$long_description', `category_id` = '$category_id'
                  WHERE id = $product;";
$result = $pdo->query($sql);
header("location: ./all_product.php");
