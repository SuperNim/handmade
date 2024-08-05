//Урок 1
// function fun1() {
//     var chbox;
//     chbox=document.getElementById('one');
//
//     if (chbox.checked) {
//         alert('Выбран')
//     }
//     else {
//         alert('Не выбран')
//     }
// }

// function fun1() {
//     var radi=document.getElementsByName('r1');
//     for (var i = 0 ; i < radi.length; i++) {
//         if (radi[i].checked) {
//             alert('Выбран ' +i+ ' элемент');
//         }
//     }
// }

//Урок 2
// function fun1() {
//     var sel = document.getElementById('mySelect').selectedIndex;
//     var options= document.getElementById('mySelect').options;
//     alert('Выбрана опция ' +options[sel].text);
// }

// function fun1() {
//     var rng=document.getElementById('r1');
//     // var p=document.getElementById('one');
//     // var i1=document.getElementById('i1');
//     var div=document.getElementById('test');
//     // i1.value=rng.value;
//     div.style.width=rng.value +'px';
// }

//Урок 3
// function fun1() {
//     var rtl=document.getElementById('rtl').value;
//     var rtr=document.getElementById('rtr').value;
//     var rbr=document.getElementById('rbr').value;
//     var rbl=document.getElementById('rbl').value;
//     var ttl=document.getElementById('ttl');
//     var ttr=document.getElementById('ttr');
//     var tbr=document.getElementById('tbr');
//     var tbl=document.getElementById('tbl');
//
//     var block = document.getElementById('block');
//
//     ttl.value=rtl;
//     ttr.value=rtr;
//     tbr.value=rbr;
//     tbl.value=rbl;
//
//     block.style.borderRadius=rtl+'px ' +rtr+'px ' +rbr+'px ' +rbl+'px ';
// }

<!--Урок 4-->
// document.getElementById('nav').onmouseover = function (event) {
//     var target = event.target;
//     if (target.className == 'menu_item') {
//         var s = target.getElementsByClassName('submenu');
//         closeMenu();
//         s[0].style.display='block';
//     }
// }
//
// document.onmouseover=function (event) {
//     var target = event.target;
//     console.log(event.target);
//     if (target.className!='menu_item' && target.className!='submenu') {
//         closeMenu();
//     }
// }
//
// function closeMenu () {
//     var menu = document.getElementById('nav');
//     var subm=document.getElementsByClassName('submenu');
//     for (var i=0; i <subm.length; i++) {
//         subm[i].style.display="none";
//     }
// }

<!--Урок 5 - Вкладки TAB-->
// var tab;
// var tabContent;
//
// window.onload=function () {
//     tabContent=document.getElementsByClassName('tabContent');
//     tab=document.getElementsByClassName('tab');
//     hideTabsContent(1);
// }
//
// function hideTabsContent(a) {
//     for (var i=a; i<tabContent.length; i++) {
//         tabContent[i].classList.remove('show');
//         tabContent[i].classList.add('hide');
//         tab[i].classList.remove('whiteborder');
//     }
// }
//
// document.getElementById('tabs').onclick=function (event) {
//     var target=event.target;
//     if (target.className=='tab') {
//         for (var i=0; i<tab.length; i++) {
//             if(target == tab[i]) {
//                 showTabsContent(i);
//                 break;
//             }
//         }
//     }
// }
//
// function showTabsContent(b) {
//     if (tabContent[b].classList.contains('hide')) {
//         hideTabsContent(0);
//         tab[b].classList.add('whiteborder');
//         tabContent[b].classList.remove('hide');
//         tabContent[b].classList.add('show');
//     }
// }

<!--Урок 6 - модальные окна-->
// var modal = document.getElementById('myModal');
// var btn = document.getElementById("myBtm");
// var span = document.getElementsByClassName("close")[0];
//
// btn.onclick = function () {
//     modal.style.display = "block";
// }
//
// span.onclick = function () {
//     modal.style.display = "none";
// }
//
// window.onclick = function (event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

<!--Урок 7 - Анимация-->
// function myMove() {
//     var elem = document.getElementById("myAnimaton");
//     var pos = 0;
//     var id = setInterval(frame, 10);
//     function frame() {
//         if (pos == 350) {
//             clearInterval(id);
//         }
//         else {
//             pos ++;
//             elem.style.top = pos + 'px';
//             elem.style.left = pos + 'px';
//         }
//     }
// }

<!--Урок 8 - слайдер-->
// var slideIndex = 1;
// showSlides(slideIndex);
//
// function  plusSlides(n){
//     showSlides(slideIndex += n);
// }
//
// function  currentSlide(n){
//     showSlides(slideIndex = n);
// }
//
// function showSlides(n) {
//     var i;
//     var slides = document.getElementsByClassName("mySlides");
//     var dots = document.getElementsByClassName("dot");
//
//     if ( n >slides.length) {
//         slideIndex = 1
//     }
//     if ( n < 1) {
//         slideIndex =slides.length
//     }
//     for (i=0; i <slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++){
//         dots[i].className= dots[i].className.replace("active","");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className+= "active";
// }

alert("Hello World!");





