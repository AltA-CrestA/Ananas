<?php

use App\components\AdminBase;
use App\models\Category;

/**
 * Контроллер AdminCategoryController
 * Управление категориями в админпанели
 */

class AdminCategoryController extends AdminBase
{

    /**
     * Action для страницы управление категориями
     */
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

    /**
     * Action для страницы добавить категорию
     */
    public function actionCreate()
    {

        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $sort_order = $_POST['sort_order'];
            $status = $_POST['status'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужым образом
            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую категорию
                Category::createCategory($name, $gender, $sort_order, $status);

                // Перенаправляем пользователя на страницу управление категориями
                header("Location: /admin/category");
            }

        }

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_category/create.php');
        return true;

    }

    /**
     * Action для страницы редактировать категории
     * @param $id
     * @return bool
     */
    public function actionUpdate($id)
    {

        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $sort_order = $_POST['sort_order'];
            $status = $_POST['status'];

            // Сохраняем изменения
            Category::updateCategoryById($id, $name, $gender, $sort_order, $status);

            // Перенаправляем пользователя на страницу управление категориями
            header("Location: /admin/category");

        }

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_category/update.php');
        return true;

    }

    /**
     * @param $id
     * Action для страницы удалить категорию
     * @return bool
     */
    public function actionDelete($id)
    {

        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Category::deleteCategoryById($id);

            // Перенаправляем пользователя на страницу управление категориями
            header("Location: /admin/category");

        }

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_category/delete.php');
        return true;
    }


}