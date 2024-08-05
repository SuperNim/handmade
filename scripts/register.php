<?php
include '../DB.php';

var_dump($_POST);
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$pdo = $pdo = newPDO();
$sql = "INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES (NULL, '$email', '$password', '0')";
$result = $pdo->query($sql);
header("location: ../Vxod.php");