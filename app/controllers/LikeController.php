<?php

use App\models\Like;
use App\models\Product;

class LikeController
{

    public function actionindex()
    {

        $productsInLike = false;

        // Получаем данные из закладок
        $productsInLike = Like::getProducts();

        if ($productsInLike) {
            // Получаем полную информацию об товарах для списка
            $productsIds = array_keys($productsInLike);
            $products = Product::getProductsByIds($productsIds);

        }

        require_once(ROOT . '/app/views/like/index.php');

        return true;

    }

    public function actionAdd($id)
    {

        // Добавляем товар в закладки
        Like::addProduct($id);

        // Возваращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location $referrer");

    }

    public function actionAddAjax($id)
    {

        // Добавляем товар в закладки
        echo Like::addProduct($id);
        return true;


    }

    public function actionDelete($id)
    {

        // Удаляем заданный товар из закладок
        Like::deleteProduct($id);

        // Возвражаем пользователя в закладки
        header("Location: /like/");

    }

}