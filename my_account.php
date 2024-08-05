<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: ../Vxod.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<?php include "./include/head.php" ?>
<body>
<?php include "./include/header.php" ?>

<div class="wrapper">

</div>
<?php include "./include/my_account/main.php" ?>
<?php include "./include/main/contact.php" ?>
<?php include "./include/main/footer.php" ?>
<script src="js/main.js">

</script>



</body>
</html>
