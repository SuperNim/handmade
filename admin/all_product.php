<?php
include './check_admin.php';
include './DB.php';

$pdo = newPDO();
$sql = "SELECT * FROM products";
$result = $pdo->query($sql);
$products = $result->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товары</title>
    <link rel="stylesheet" href="css/style_newfile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php include "./menu.php" ?>
<?php
foreach ($products as $product){
?>
    <h1>ID = <?=$product['id'] ?></h1>
    <p> <img src="/photos/<?=$product['photo']?>" width="200px" alt=""></p>
    <p>Title <?=$product['title'] ?></p>
    <p>Price = <?=$product['price'] ?></p>
    <p>Count = <?=$product['count'] ?></p>
    <p>Date = <?=$product['date'] ?></p>
    <p><a href="./product.php?id=<?=$product['id'] ?>"> Посмотреть </a></p>
    <p><a href="./delet_product.php?id=<?=$product['id'] ?>"> Удалить </a></p>
    <p><a href="./edit_product.php?id=<?=$product['id'] ?>"> Редактирование </a></p>
<?php
}
?>
</body>
</html>

