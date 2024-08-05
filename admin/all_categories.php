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
    <title>Категории</title>
    <link rel="stylesheet" href="css/style_newfile.css">
</head>
<body>
<?php include "./menu.php" ?>
<?php
foreach ($categories as $categorie){
    ?>
    <h1>ID = <?=$categorie['id'] ?></h1>
    <p>Title <?=$categorie['title'] ?></p>
    <p>Description = <?=$categorie['description'] ?></p>
    <p><a href="./categorie.php?id=<?=$categorie['id'] ?>"> Посмотреть </a></p>
    <p><a href="./delet_categorie.php?id=<?=$categorie['id'] ?>"> Удалить </a></p>
    <p><a href="./edit_categorie.php?id=<?=$categorie['id'] ?>"> Редактирование </a></p>
    <?php
}
?>
</body>
</html>