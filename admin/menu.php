<?php
session_start();
?>

<a href="/index.php">
    <div class="punkt">
        Главная страница
    </div>
</a>
<a href="/all_product.php">
    <div class="punkt">
        Товары
    </div>
</a>
<a href="/add_product_form.php">
    <div class="punkt">
        Добавления товаров
    </div>
</a>
<a href="/categories.php">
    <div class="punkt">
        Категории
    </div>
</a>
<a href="/all_categories.php">
    <div class="punkt">
        Все Категории
    </div>
</a>
<?php if(isset($_SESSION['is_login'])){?>
    <span>Вы вошли как <?= $_SESSION['login'] ?></span>
    <a href="/logout.php">
        <div class="punkt">
            Выйти
        </div>
    </a>
<?php } else { ?>
    <a href="/login_form.php">
        <div class="punkt">
            Войти
        </div>
    </a>
<?php } ?>

