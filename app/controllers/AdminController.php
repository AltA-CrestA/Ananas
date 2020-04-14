<?php


use App\components\AdminBase;

class AdminController extends AdminBase
{

    public function actionIndex()
    {

        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once (ROOT . '/app/views/admin/index.php');
        return true;
    }

}