<?php
require "./ClanekObjekt.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBlog Prestige</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="side-nav">
            <a href="#" class="logo">
                <img src="./img/logo.png" alt="logo" class="logo-img">
                <img src="./img/logo-mobile.png" alt="logo" class="logo-mobile">
            </a>
            <ul class="nav-links">
                <li><a href="./index.html"><i class="fa-solid fa-house-user"></i><p>Hlavní stránka</p></a></li>
                <li><a href="./napsatClanek.html"><i class="fa-solid fa-pencil"></i><p>Napsat článek</p></a></li>
                <li><a href="#"><p>Teprve bude</p></a></li>
                <li><a href="#"><p>Teprve bude</p></a></li>
                <li><a href="#"><p>Teprve bude</p></a></li>
                <li><a href="./nastaveni.html"><i class="fa-solid fa-gear"></i><p>Nastavení</p></a></li>
                <div class="active"></div>
            </ul>
        </div>
    </div>
    <div class="nadpis">
        <h1 class="nadpis-h1"></h1>
    </div>
    <div class="clanky">
        <?php
        for ($i=1; $i <= 3; $i++) { 
            $clanek = new Clanek($i);
            echo "<a href='clanek.php?id=".$i."'>".$clanek->get_title()."</a><br>";
        }
        ?>
        </div>
</body>
</html>