var menu = document.getElementById('tab_menu')
var kategoria = document.getElementById('tab_kategoria')
var menu_punkts = document.getElementById ('menu_punkts')
var kategoria_punkt  = document.getElementById ('kategoria_punkt')

kategoria.addEventListener('click', function (){
    menu_punkts.style.display='none'
    kategoria_punkt.style.display='block'
})
menu.addEventListener('click', function (){
    menu_punkts.style.display='block'
    kategoria_punkt.style.display='none'
})

var burger = document.getElementById("burger_side_menu");
var side_basket_korzina_icon = document.getElementById("side_basket_korzina_icon");
var side_menu = document.getElementById("side_menu");
var side_basket = document.getElementById("side_basket");
burger.addEventListener("click", function (){
    side_menu.classList.add("side_menu_active")
})
side_basket_korzina_icon.addEventListener("click", function (){
    side_basket.classList.add("side_menu_active")
})
side_menu.addEventListener("click", function (e){
    if(!e.target.classList.contains("side_menu")){
        return
    }
    side_menu.classList.remove("side_menu_active")
})
side_basket.addEventListener("click", function (e){
    if(!e.target.classList.contains("side_menu")){
        return
    }
    side_basket.classList.remove("side_menu_active")
})


