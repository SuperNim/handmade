<?php
include './check_admin.php';
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
<form action="add_categories.php" method="POST">
    <input type="text" name="name_categories" placeholder="Название"><br>
    <input type="text" name="description" placeholder="Описание"><br>
    <input type="submit" value="Добавить категорию."><br>
</form>
</body>
</html>