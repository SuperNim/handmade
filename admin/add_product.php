<?php
include './DB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['photo']['size'] == 0) {
        echo 'Загрузите файл!';
        exit;
    }


    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($_FILES['photo']['type'], $allowed_types)) {
        echo 'Недопустимый тип файла! Разрешены только JPEG, PNG и GIF.';
        exit;
    }


    $file_name = uniqid() . '-' . basename($_FILES['photo']['name']);
    $tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name, 'photos/' . $file_name);


    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
    $count = filter_var($_POST['count'], FILTER_VALIDATE_INT);
    $date = $_POST['date'];
    $short_description = filter_var($_POST['short_description'], FILTER_SANITIZE_STRING);
    $long_description = filter_var($_POST['long_description'], FILTER_SANITIZE_STRING);
    $category_id = filter_var($_POST['category_id'], FILTER_VALIDATE_INT);

    if (!$name || !$price || !$count || !$date || !$short_description || !$long_description || !$category_id) {
        echo 'Invalid input data!';
        exit;
    }


    $pdo = newPDO();
    $stmt = $pdo->prepare("INSERT INTO products (title, price, count, date, photo, short_description, long_description, category_id) 
                           VALUES (:name, :price, :count, :date, :file_name, :short_description, :long_description, :category_id)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':count', $count);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':file_name', $file_name);
    $stmt->bindParam(':short_description', $short_description);
    $stmt->bindParam(':long_description', $long_description);
    $stmt->bindParam(':category_id', $category_id);

    if ($stmt->execute()) {
        header("Location: ./all_product.php");
    } else {
        echo 'Error occurred while adding product!';
    }
}
?>
