<?php
include './check_admin.php';
include './DB.php';

$pdo = newPDO();
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
    <form action="add_product.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Название"><br>
        <input type="number" name="price" placeholder="Цена"><br>
        <input type="number" name="count" placeholder="Количество"><br>
        <input type="date" name="date" placeholder="Дата добавления"><br>
        <select name="category_id" id="">
            <?php foreach ($categories as $categorie) {
            ?>
                <option value = "<?=$categorie['id']?>"><?=$categorie['title']?></option>
            <?php
            }
            ?>
        </select><br>
        <textarea name="short_description" id="" cols="70" rows="10" placeholder="Краткое описание"></textarea><br>
        <textarea name="long_description" id="" cols="70" rows="20" placeholder="Полное описание"></textarea><br>
        <input type="file" name="photo"><br>
        <input type="submit" value="Добавить товар"><br>
    </form>
</body>
</html>