<?php
session_start();
if(!isset($_GET['id'])) {
    header("location: ./404.html");
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
<?php include "./include/one_product/one_product.php" ?>
<?php include "./include/main/contact.php" ?>
<?php include "./include/main/footer.php" ?>
<script src="js/main.js">

</script>



</body>
</html>
