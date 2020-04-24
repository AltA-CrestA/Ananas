<?php
return array(

    'catalog' => 'catalog/index', //actionIndex в CatalogController = 0
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController = 1

    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController = 2
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController = 3
    'cart' => 'cart/index', // actionIndex в CartController = 4

    'user/register' => 'user/register', // = 5
    'user/login' => 'user/login', // = 6
    'user/logout' => 'user/logout', // = 7

    'cabinet/edit' => 'cabinet/edit', // actionEdit в CabinetController = 8
    'cabinet' => 'cabinet/index', // actionIndex в CabinetController = 9

    'like' => 'like/index', // actionIndex в LikeController = 10
    'like/delete/([0-9]+)' => 'like/delete/$1', // actionDelete в LikeController = 11
    'like/addAjax/([0-9]+)' => 'like/addAjax/$1', // = 12

    // Управление товарами:
    'admin/product/select' => 'adminProduct/select', // = 13
    'admin/product/createMan' => 'adminProduct/createMan', // = 14
    'admin/product/createWoman' => 'adminProduct/createWoman', // = 15
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1', // = 16
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1', // = 17
    'admin/product' => 'adminProduct/index', // = 18

    // Упарвление категориями:
    'admin/category/create' => 'adminCategory/create', // = 19
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1', // = 20
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1', // = 21
    'admin/category' => 'adminCategory/index', // = 22

    // Управление абонементами:
    'admin/ticket/create' => 'adminTicket/create', // = 23
    'admin/ticket/update/([0-9]+)' => 'adminTicket/update/$1', // = 24
    'admin/ticket/delete/([0-9]+)' => 'adminTicket/delete/$1', // = 25
    'admin/ticket' => 'adminTicket/index', // = 26

    // Просмотр пользователей:
    'admin/user/update/([0-9]+)' => 'adminUser/update/$1', // = 27
    'admin/user' => 'adminUser/index', // = 28

    // Админпанель
    'admin' => 'admin/index', // = 29



    'contacts' => 'site/contact', // = 30
    'ticket' => 'ticket/index', // = 31
    'privacy' => 'site/privacy', // = 32

    '^/*$' => 'site/index', // action в SiteController // = 33

);