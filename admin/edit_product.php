<?php
include './check_admin.php';
include './DB.php';

$product = $_GET ['id'];
$pdo = newPDO();
$sql = "SELECT * FROM products WHERE id=$product";
$result = $pdo->query($sql);
$product = $result->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM categories";
$result = $pdo->query($sql);
$categories = $result->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление товара</title>
    <link rel="stylesheet" href="css/style_newfile.css">
</head>
<body>
<?php include "./menu.php" ?>
<form action="update_product.php" method="POST">
    <input type="text" name="name" placeholder="Название" value="<?=$product['title'] ?>"><br>
    <input type="text" name="price" placeholder="Цена" value="<?=$product['price'] ?>"><br>
    <input type="text" name="count" placeholder="Количество" value="<?=$product['count'] ?>"><br>
    <input type="date" name="date" placeholder="Дата добавления" value="<?=$product['date'] ?>"><br>
    <select name="category_id" id="">
        <?php foreach ($categories as $categorie) {
        ?>
            <option value = "<?=$categorie['id']?>" <?= ($product['category_id']==$categorie['id'])?"selected":"" ?>><?=$categorie['title']?></option>
        <?php
        }
        ?>
    </select><br>
    <textarea name="short_description" id="" cols="70" rows="10" placeholder="Краткое описание"><?=$product['short_description']?></textarea><br>
    <textarea name="long_description" id="" cols="70" rows="20" placeholder="Полное описание"><?=$product['long_description'] ?></textarea><br>
    <input type="hidden" name="id" value="<?=$product['id'] ?>"><br>
    <input type="submit" value="Редактирование"><br>
</form>
</body>
</html>
