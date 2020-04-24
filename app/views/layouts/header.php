<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/app/template/css/style.css">
    <link rel="shortcut icon" href="/app/template/img/icon.png" type="image/png">
    <link rel="icon" href="/app/template/img/icon.png" type="image/png">
    <link rel="apple-touch-icon" href="/app/template/img/icon.png" type="image/png"/>
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <title><?php include ROOT . '/app/config/titles.php'?></title>
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header__body">
            <a href="/" class="header__logo">
                <picture>
                    <source srcset="/app/template/img/01.webp" type="image/webp">
                    <img src="/app/template/img/01.png" alt="">
                </picture>
            </a>
            <nav class="header__menu">
                <ul class="header__list">
                    <li>
                        <a href="/catalog/" class="header__link">Каталог</a>
                    </li>
                    <li>
                        <a href="/ticket/" class="header__link">Абонементы</a>
                    </li>
                    <li>
                        <a href="/#about" class="header__link">О нас</a>
                    </li>
                    <li>
                        <a href="/contacts/" class="header__link">Контакты</a>
                    </li>

                </ul>
            </nav>
            <div class="header-login steal__big">

                <?php use App\models\Cart;

                if (!App\models\User::isGuest()): ?>
                    <div class="header__buttons">
                        <div class="header-user">
                            <a href="#" class="dropbtn">
                                <i class="fas fa-user"></i>
                                <span class="small__user">Личный кабинет</span>
                            </a>
                            <div class="dropdown-content">
                                <a href="/cabinet/">Мой профиль</a>
                                <a href="/like/">Мои закладки
<!--                                    (<span id="like-count">-->
<!--                                        --><?php //echo Like::countItems(); ?>
<!--                                    </span>)</a>-->
                                <a href="/user/logout/">Выйти</a>
                            </div>
                        </div>
                        <div id="cart" class="header-cart">
                            <a href="/cart/">
                            <i class="fas fa-shopping-cart"></i>
                            <div class="icon__cart-basket">
                                <span id="cart-count">
                                    <?php echo Cart::countItems(); ?>
                                </span>
                            </div>
                            </a>
                        </div>
                    </div>

                <?php else: ?>
                    <a href="/user/login/" class="login__button">Войти</a>
                <?php endif; ?>

            </div>
            <div class="header__burger">
                <span></span>
            </div>
        </div>
    </div>
</header>