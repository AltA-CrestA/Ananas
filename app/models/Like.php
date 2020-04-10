<?php


namespace App\models;


class Like
{

    public static function addProduct($id)
    {

        $id = intval($id);

        // Пустой массив для абонементов в корзине
        $productsInCart = array();

        // Если в корзине уже есть абонементы (они хранятся в сессии)
        if (isset($_SESSION['product'])) {
            // То заполним наш массив абонементами
            $productsInCart = $_SESSION['product'];
        }

        $_SESSION['products'] = $productsInCart;

        return self::countItems();

    }

    public static function countItems()
    {

        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count +$quantity;
            }
            return $count;
        } else {
            return 0;
        }

    }

    public static function getProducts()
    {

        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;

    }

    public static function deleteProduct($id)
    {

        // Получаем массив с идентификатором и количеством товаров в закладках
        $productsInLike = self::getProducts();

        // Удаляем из массива элемент с указанным id
        unset($productsInLike['id']);

        // Записываем массив товаров с удаленным элементом в сессию
        $_SESSION['products'] = $productsInLike;

    }

}