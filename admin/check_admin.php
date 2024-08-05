<?php
session_start();
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
header("location: login_form.php");
exit;
}