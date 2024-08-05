<?php

$pdo = new PDO("mysql:host=localhost;dbname=testBD", "root", "");
$sql = "SELECT * FROM products LIMIT 5";
$result = $pdo->query($sql);
$products = $result->fetchAll(PDO::FETCH_ASSOC);



$sql = "SELECT * FROM categories";
$result = $pdo->query($sql);
$categories = $result->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="shop">
    <div class="obshiy_filter">
        <div class="filter">
            <div class="PRODUCT_CATEGORIES">
                PRODUCT CATEGORIES
            </div>
            <?php foreach ($categories as $categorie) {
                ?>
            <div class="stroka_filter">
                <div class="gategorey_nije">
                    <?=$categorie['title']?>
                </div>
                <div class="kolichestvo_tovara min_padding">
                    15
                </div>
            </div>
                <?php
            }
            ?>
        </div>
        <div class="FILTER_BY_PRICE">
            FILTER BY PRICE
        </div>
        <div class="slidecontainer">
            <input type="range" min="1" max="1000" value="500" class="slider_3" id="myRange">
        </div>
        <div class="polzunok_cenu_filter">
            <div class="price_polzunka">
                Price:
            </div>
            <div class="suma_polzunka">
                0 P — <span id="myRange_output">500 P</span>
            </div>
            <div class="kopka_filter">
                FILTER
            </div>
        </div>
        <div class="kartina_chvetochka">
            <div class="verx">
                SEMPER ERAT
            </div>
            <div class="seredina">
                Condim Sceleris</br>
                Impertas Parturient
            </div>
            <div class="niz">
                VIEW MORE
            </div>
        </div>
    </div>
    <div class="katatalog_s_tovarami">
        <div class="vse">
            <?php
            foreach ($products as $product){
                ?>
            <div class="tovary">
                <div class="kartinka_v_shop">
                    <img src="/photo/<?=$product['photo']?>" alt="">
                </div>
                <div class="dli_inlin_block">
                    <div class="nazvanie_tovara_v_blocke">
                         <p><a href="./one_product.php?id=<?=$product['id'] ?>"> <?=$product['title'] ?> </a></p>
                    </div>
                    <div class="kategorya_tovara_v_blocke">
                        Decor
                    </div>
                    <div class="price_tovara_v_blocke">
                        <?=$product['price'] ?> P
                    </div>
                    <div class="opesanie_tovara_v_blocke">
                        <?=$product['short_description'] ?>
                    </div>
                    <div class="knopka_kupit_tovara_v_blocke">
                        <div class="knopka_kupit_tovara_v_blocke_kontent" data-product_id="<?=$product['id'] ?>">
                            ADD TO CART </br> </br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="moving_block_v_blocke">
                    <div class="mini_lupa plus plus_2">
                        &#128269;
                    </div>
                    <div class="mini_strelki plus plus_3">
                        &#8649;
                    </div>
                    <div class="mini_serdche plus">
                        &#10084;
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="perekluchenie">
        <div class="vudeleniy chefru_shopa">
            1
        </div>
        <div class="chefru_shopa">
            2
        </div>
        <div class="chefru_shopa">
            3
        </div>
        <div class="chefru_shopa">
            4
        </div>
        <div class="chefru_shopa">
            >
        </div>
    </div>
</div>
<script>
    buttons = document.getElementsByClassName("knopka_kupit_tovara_v_blocke_kontent")
    for (let button of buttons) {
        button.addEventListener('click', function (e) {
            alert (this.dataset.product_id)
                fetch('/scripts/add_product_to_basket.php', {
                    method: 'POST',
                    body: JSON.stringify({product_id: 15})
                })
                    .then(res => res.json())
                    .then(res => console.log(res));
        })
    }
</script>