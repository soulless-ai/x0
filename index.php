<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        
        <meta charset="utf-8"/>
        <title>x0</title>
        <meta name="description" content="Икс нолик">
        <meta name="keywords" content="Икс нолик, x0">
        <meta name="author" content="qqq">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="">
        <meta property="og:title" content="x0">
        <meta property="og:description" content="Икс нолик">
        <meta property="og:type" content="website">
        <meta property="og:image" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#fff">
        <link rel="canonical" href="">
        <!--website-favicon-->
        <link rel="icon" href="images/favicon.png">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/favicon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/favicon.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/favicon.png">
        <meta name="msapplication-TileColor" content="#fff">
        <meta name="msapplication-TileImage" content="images/favicon.png">
        <!-- template-style-->
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>
        <header>
            <div class="header-container">
                <div class="header-logo">
                    <a class="header-brand" href="index.html">
                        x0
                    </a>
                </div>
                <div class="custom-nav navfix menu-white scroll-animation" role="navigation">
                    <ul class="nav-list">
                        <li class="sbmenu">
                            <a href="price.html" class="menu-links">Тарифы</a>
                        </li>
                        <li class="sbmenu">
                            <a href="#" class="menu-links">Документация</a>
                        </li>
                        <li class="sbmenu">
                            <a href="sign_page.html#registrer" class="menu-links">Триал доступ</a>
                        </li>
                    </ul>
                    <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                    <ul class="nav-list right-end-btn">
                        <li class="hidemobile">
                            <a href="sign_page.html" class="btn-br bg-btn3 btshad-b2 lnk">
                                Попробовать сыграть<span class="circle"></span>
                            </a> 
                        </li>     
                        <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Mobile Menu-->
            <nav id="nav-mobile-container">
                <ul class="nav-mobile-top">
                    <li>
                        <a href="#">Тарифы</a>
                    </li>
                    <li>
                        <a href="#">Документация</a>
                    </li>
                    <li>
                        <a href="sign_page.html#registrer">Триал доступ</a>
                    </li>
                    <li class="pt60 plr-10 nav-main-button">
                        <a href="sign_page.html" class="btn-br bg-btn3 btshad-b2 lnk">
                            Попробовать сыграть<span class="circle"></span>
                        </a> 
                    </li>
                </ul>
                <ul class="nav-mobile-bottom">

                </ul>
            </nav>
        </header>
        <section id="game-container">
            <div class="game-description">
                <div>
                    
                </div>
                <h1>Выиграшное табло</h1>
            </div>
            <table>
                <tr>
                    <td>Сама игра</td>
                </tr>
            </table>
        </section>
        <section id="game-table">
            <button id="game-table-friends-search">Найти друга</button>
            <div id="game-table-friends-list">
                <ul>
                    <li>Имя игрока <button>Пригласить сыграть</button></li>
                </ul>
            </div>
        </section>
        <script src="js/main.js"></script>
    </body>
</html>