<?php
include './check_admin.php';
include './DB.php';


$product_id = $_GET ['id'];
$pdo = newPDO();
$sql = "SELECT * FROM products WHERE id=$product_id";
$result = $pdo->query($sql);
$product = $result->fetch(PDO::FETCH_ASSOC);

$categorie_id = $product ['category_id'];

$sql = "SELECT * FROM categories WHERE id=$categorie_id";
$result = $pdo->query($sql);
$categorie = $result->fetch(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_newfile.css">
</head>
<body>
<?php include "./menu.php" ?>
    <h1>ID = <?=$product['id'] ?></h1>
    <p> <img src="/photos/<?=$product['photo']?>" width="200px" alt=""></p>
    <p>Title <?=$product['title'] ?></p>
    <p>Price = <?=$product['price'] ?></p>
    <p>Count = <?=$product['count'] ?></p>
    <p>Date = <?=$product['date'] ?></p>
    <p>Category = <?=$categorie['title']?></p>
    <p>Short Description = <?=$product['short_description'] ?></p>
    <p>Long Description = <?=$product['long_description'] ?></p>
</body>
</html>