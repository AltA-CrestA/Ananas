<?php
return array(

    'catalog' => 'catalog/index', //actionIndex в CatalogController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController

    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    'cabinet/edit' => 'cabinet/edit', // actionEdit в CabinetController
    'cabinet' => 'cabinet/index', // actionIndex в CabinetController

    'like' => 'like/index', // actionIndex в LikeController
    'like/delete/([0-9]+)' => 'like/delete/$1', // actionDelete в LikeController
    'like/add/([0-9]+)' => 'like/add/$1', // actionAdd в LikeController
    'like/addAjax/([0-9]+)' => 'like/addAjax/$1',

    'admin' => 'admin/index',



    'contacts' => 'site/contact',
    'ticket' => 'ticket/index',

    '^/*$' => 'site/index', // action в SiteController

);