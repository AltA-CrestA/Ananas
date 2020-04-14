<?php

use App\components\AdminBase;

/**
 * Контроллер AdminProductController
 * Управление товарами в админпанели
 */

class AdminProductController extends AdminBase
{

    public function actionIndex()
    {

        // Проверка доступа
        self::checkAdmin();

        // Получаем список товаров
        $productList

    }

}