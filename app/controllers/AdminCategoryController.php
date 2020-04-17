<?php

use App\components\AdminBase;
use App\models\Category;

/**
 * Контроллер AdminCategoryController
 * Управление категориями в админпанели
 */

class AdminCategoryController extends AdminBase
{

    public function actionIndex()
    {

        // Проверка доступа
        self::checkAdmin();

        // Получаем список категорий
        $categoryListWoman = Category::getCategoriesListWomanAdmin();
        $categoryListMan = Category::getCategoriesListManAdmin();
        $categoryListAll = Category::getCategoriesListAllAdmin();

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_category/index.php');
        return true;

    }

}