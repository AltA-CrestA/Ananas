<?php

// FRONT CONTROLLER

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();


// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once ROOT . '/vendor/autoload.php';
require_once ROOT . '/app/components/Cookies.php';
$cookies = new App\components\Cookies();
$cookies->checkCookies();

// 3. Вызор Router

$router = new App\components\Router();
$router->run();

// 4. Установка Куки
$cookies = new App\components\Cookies();
$cookies->checkCookies();