<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Semen Garage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style price.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link rel="icon" href="img/pistons-cross1.svg">
</head>

<header>
<div class="logo">
    <a href="index.php" class="icon"></a>
    <span class="name">semen garage</span>
</div>
<div class="menu">
    <a href="?page=price" class="price">цены</a>
    <a href="?page=map" class="map">схема проезда</a>
    <a href="?page=feedback" class="reviews">отзывы</a>
</div>
<div class="phone_number">
    <a href="https://t.me/liono94" class="tg"></a>
    <a href="" class="vb"></a>
    <a href="tel:+380997634606" class="ph"></a>
    <span class="num">+380997634606</span>
    <div class="menu_i" onclick="openNav()"></div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</div>
</header>

<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Главная</a>
    <a href="?page=price">Цены</a>
    <a href="?page=map">Схема проезда</a>
    <a href="?page=feedback">Отзывы</a>
</div>
<?php
$page = strip_tags($_GET['page']);
if($page == null){
    require 'pages/main.php';
}
else{
    require 'pages/' . $page . '.php';
}
?>
<footer>
<div class="phone_number">
    <div class="tg"></div>
    <div class="vb"></div>
    <div class="ph"></div>
    <span class="num">+380997634606</span>
</div>
<div class="address_block">
    <div class="map"></div>
    <a target="blank" href="https://www.google.com/maps/place/50%C2%B025'18.0%22N+30%C2%B028'02.6%22E/@50.421677,30.465199,17z/data=!3m1!4b1!4m14!1m7!3m6!1s0x40d4cec849b03fcb:0x25a2d0855bdd02d9!2z0KHQvtC70L7QvNC10L3RgdC60LjQuSDRgNCw0LnQvtC9LCDQmtC40LXQsiwgMDIwMDA!3b1!8m2!3d50.4215466!4d30.4672486!3m5!1s0x0:0x0!7e2!8m2!3d50.4216766!4d30.4673934" class="address">проспект Лобановского 8б, г. Киев</a>
</div>
</footer>
</body>
</html>