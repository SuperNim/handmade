<?php
session_start();

include '../DB.php';

var_dump($_POST);
$email = $_POST['email'];
$password = $_POST['password'];

$pdo = newPDO();
$sql = "SELECT id, email, password FROM users WHERE email = '$email'";
$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $row['password'])) {
        $_SESSION['email'] = $email;
        header("location: ../my_account.php");
        exit;
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found";
}
header("location: ../Vxod.php");
