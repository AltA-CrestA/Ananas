<?php


use App\components\AdminBase;
use App\models\User;

/**
 * Контроллер AdminUserController
 * Просмотр и управление привилегиями в админпанели
 */
class AdminUserController extends AdminBase
{

    /**
     * Action для страницы просмотра пользователей
     */
    public function actionIndex()
    {

        // Проверка доступа
        self::checkAdmin();

        // Получаем список пользователей
        $userList = User::getUsersListAdmin();

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_user/index.php');
        return true;

    }

    public function actionUpdate($id)
    {

        // Проверка доступа
        self::checkAdmin();

        $user = User::getUserById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $role = $_POST['role'];

            // Сохраняем изменения
            User::updateUserById($id, $role);

            // Перенаправляем пользователя на страницу управление категориями
            header("Location: /admin/user");

        }

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_user/update.php');
        return true;

    }

}