<?php


if ($_SERVER['REQUEST_URI'] == '/catalog/') {
    echo 'Каталог &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/cart/') {
    echo 'Корзина &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/') {
    echo 'Главная &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/ticket/') {
    echo 'Абонементы &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/contacts/') {
    echo 'Контакты &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/cabinet/') {
    echo 'Личный кабинет &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/cabinet/edit/') {
    echo 'Редактировать личные данные &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/cabinet/edit/') {
    echo 'Редактировать личные данные &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/like/') {
    echo 'Мои закладки &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/user/login/') {
    echo 'Авторизация &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/user/register/') {
    echo 'Регистрация &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/') {
    echo 'Панель администратора &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/product/') {
    echo 'Управление товарами &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/product/createMan/') {
    echo 'Создание мужского товара &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/product/createWoman/') {
    echo 'Создание женского товара &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/product/select/') {
    echo 'Выберите пол &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/category/') {
    echo 'Управление категориями &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/category/create/') {
    echo 'Создание категории &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/ticket/create/') {
    echo 'Создание абонемента &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/ticket/') {
    echo 'Управление абонементами &mdash; Ананас Shop-sharing';
}
elseif ($_SERVER['REQUEST_URI'] == '/admin/user/') {
    echo 'Просмотр пользователей &mdash; Ананас Shop-sharing';
}
else {
    echo 'Ананас Shop-sharing';
}

