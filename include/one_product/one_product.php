<?php
$product = $_GET ['id'];
$pdo = new PDO("mysql:host=localhost;dbname=testBD", "root", "");
$sql = "SELECT * FROM products WHERE id=$product";
$result = $pdo->query($sql);
$product = $result->fetch(PDO::FETCH_ASSOC);
?>

<div class="one_product">
    <div class="kartinka_v_one_product" style="background-image: url('/photo/<?=$product['photo']?>')">

    </div>
    <div class="sprava_ot_kartinka_v_one_product">
        <div class="name_product">
            <?=$product['title'] ?>
        </div>
        <div class="price_product">
            <?=$product['price'] ?> P
        </div>
        <div class="opesanie_product">
            <?=$product['short_description'] ?>
        </div>
        <div class="kolichestvo_product">
            <div class="vess_kolichestvo">
                <div class="minus_product">
                    -
                </div>
                <div class="chifra_product">
                    1
                </div>
                <div class="plus_product">
                    +
                </div>
            </div>
            <div class="knopka_add_to_cart">
                ADD TO CART
            </div>
        </div>
        <div class="deystvie_dly_product">
            <div class="compare_product">
                <div class="izobrajenie">
                    &#8649;
                </div>
                <div class="name_deystvie">
                    Compare
                </div>
            </div>
            <div class="izbrannoe_product">
                <div class="izobrajenie_2">
                    &#10084;
                </div>
                <div class="name_deystvie">
                    Add to wishlist
                </div>
            </div>
        </div>
        <div class="dop_deystviy">
            <div class="categor_deystviy">
                <div class="categor_r">
                    Category:
                </div>
                <div class="name_categor">
                    Decor
                </div>
            </div>
            <div class="share_deystviy">
                <div class="categor_r">
                    Share:
                </div>
                <div class="name_categor">
                    <div class="facebook_product">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="14" height="14" x="0" y="0" viewBox="0 0 479.058 479.058" style="enable-background:new 0 0 14 14" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" fill="#777777" data-original="#000000" style="" class=""/></g></svg>
                    </div>
                    <div class="facebook_product">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="14" height="14" x="0" y="0" viewBox="0 0 479.058 479.058" style="enable-background:new 0 0 14 14" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" fill="#777777" data-original="#000000" style="" class=""/></g></svg>
                    </div>
                    <div class="facebook_product">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="14" height="14" x="0" y="0" viewBox="0 0 479.058 479.058" style="enable-background:new 0 0 14 14" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" fill="#777777" data-original="#000000" style="" class=""/></g></svg>
                    </div>
                    <div class="facebook_product">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="14" height="14" x="0" y="0" viewBox="0 0 479.058 479.058" style="enable-background:new 0 0 14 14" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" fill="#777777" data-original="#000000" style="" class=""/></g></svg>
                    </div>
                </div>
                <div class="objei_reting">
                    <div class="nadpis_rating">
                        Rating:
                    </div>
                    <div class="star">
                        &#9734;
                    </div>
                    <div class="star">
                        &#9734;
                    </div>
                    <div class="star">
                        &#9734;
                    </div>
                    <div class="star">
                        &#9734;
                    </div>
                    <div class="star">
                        &#9734;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vse_razdeli_one_product">
    <div class="razdeli_one_product dop_margin">
        DESCRIPTION
    </div>
    <div class="razdeli_one_product">
        REVIEWS (0)
    </div>
    <div class="razdeli_one_product">
        SHIPPING & DELIVERY
    </div>
</div>
<div class="vse_description_one_product">
    <div class="description_one_product">
        <?=$product['long_description'] ?>
    </div>
</div>
<div class="nadpis_k_slidery">
    Related products
</div>
<div class="margin">
    <div class="slider dop_slider">
        <div class="owl-carousel owl1 owl-theme">
            <div class="item">
                <img src="img/img_4.png" alt="">
                <div class="name_tovar">
                    Mr. Cactus
                </div>
                <div class="kategorya_tovara">
                    Decor
                </div>
                <div class="chena_tovara">
                    599.00 P
                </div>
                <div class="moving_block">
                    <div class="mini_korzina">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="mini_lupa">
                        &#128269;
                    </div>
                    <div class="mini_strelki">
                        &#8649;
                    </div>
                    <div class="mini_serdche">
                        &#10084;
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img_5.png" alt="">
                <div class="name_tovar">
                    Decoration wooden wall
                </div>
                <div class="kategorya_tovara">
                    Decor
                </div>
                <div class="chena_tovara">
                    100.00 P
                </div>
                <div class="moving_block">
                    <div class="mini_korzina">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="mini_lupa">
                        &#128269;
                    </div>
                    <div class="mini_strelki">
                        &#8649;
                    </div>
                    <div class="mini_serdche">
                        &#10084;
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img_6.png" alt="">
                <div class="name_tovar">
                    Wall Photo
                </div>
                <div class="kategorya_tovara">
                    Decor
                </div>
                <div class="chena_tovara">
                    999.00 P
                </div>
                <div class="moving_block">
                    <div class="mini_korzina">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="mini_lupa">
                        &#128269;
                    </div>
                    <div class="mini_strelki">
                        &#8649;
                    </div>
                    <div class="mini_serdche">
                        &#10084;
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img_7.png" alt="">
                <div class="name_tovar">
                    Hand bracelet
                </div>
                <div class="kategorya_tovara">
                    Decor
                </div>
                <div class="chena_tovara">
                    300.00 P
                </div>
                <div class="moving_block">
                    <div class="mini_korzina">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="mini_lupa">
                        &#128269;
                    </div>
                    <div class="mini_strelki">
                        &#8649;
                    </div>
                    <div class="mini_serdche">
                        &#10084;
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img_8.png" alt="">
                <div class="name_tovar">
                    Classic Bear
                </div>
                <div class="kategorya_tovara">
                    Decor
                </div>
                <div class="chena_tovara">
                    799.00 P
                </div>
                <div class="moving_block">
                    <div class="mini_korzina">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="mini_lupa">
                        &#128269;
                    </div>
                    <div class="mini_strelki">
                        &#8649;
                    </div>
                    <div class="mini_serdche">
                        &#10084;
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img_9.png" alt="">
                <div class="name_tovar">
                    Paper Note
                </div>
                <div class="kategorya_tovara">
                    Decor
                </div>
                <div class="chena_tovara">
                    50.00 P
                </div>
                <div class="moving_block">
                    <div class="mini_korzina">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="mini_lupa">
                        &#128269;
                    </div>
                    <div class="mini_strelki">
                        &#8649;
                    </div>
                    <div class="mini_serdche">
                        &#10084;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.owl1').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots: true,
        items: 3,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>

