<?php
include './check_admin.php';
include './DB.php';

$categorie = $_GET ['id'];
$pdo = newPDO();
$sql = "SELECT * FROM categories WHERE id=$categorie";
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
<h1>ID = <?=$categorie['id'] ?></h1>
<p>Title <?=$categorie['title'] ?></p>
<p>Description = <?=$categorie['description'] ?></p>
</body>
</html>
