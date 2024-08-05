<?php
session_start();
if (!isset ($_POST ['login']) || !isset ($_POST ['password'])){
    header("location: ./login_form.php");
    exit;
}

$login = $_POST ['login'];
$password = $_POST ['password'];

if ($login == 'Sveta' && $password == '222333') {
    $_SESSION ['is_login'] = true;
    $_SESSION ['login'] = $login;
    header("location: ./index.php");
}
else {
    header("location: ./login_form.php");
}

