<?php

use App\components\AdminBase;
use App\models\Category;
use App\models\Product;

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
        $productList = Product::getProductsList();

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_product/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить товар"
     */
    public function actionCreate()
    {

        // Проверка доступа
        self::checkAdmin();

        // Получаем список категорий для выпадающего списка
        $categoriesList = Category::getCategoriesListAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные формы
            $options['name'] = $_POST['name'];
            $options['gender'] = $_POST['gender'];
            $options['category_id'] = $_POST['category_id'];
            $options['image'] = $_POST['image'];
            $options['size'] = $_POST['size'];
            $options['color'] = $_POST['color'];
            $options['status'] = $_POST['status'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужым образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Product::createProduct($options);

                header("Location: /admin/product");
            }
        }

        // Подключим вид
        require_once (ROOT . '/app/views/admin_product/create.php');
        return true;

    }

    public function actionDelete($id)
    {

        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Product::deleteProductById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/product");
        }

        // Подключаем вид
        require_once (ROOT . '/app/views/admin_product/delete.php');
        return true;

    }

}