<?php

use App\models\User;

class CabinetController
{

    public function actionIndex()
    {
        // Проверка на авторизацию
        $userId = User::checkLogged();

        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        require_once(ROOT . '/app/views/cabinet/index.php');

        return true;
    }

    public function actionEdit()
    {
        // Проверка на авторизацию
        $userId = User::checkLogged();

        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        $name = $user['name'];
        $surname = $user['surname'];
        $birth = $user['birth'];
        $email = $user['email'];
        $phone = $user['phone'];
        $login = $user['login'];
        $password = $user['password'];
        $password_2 = '';

        $result = false;

        if (isset($_POST['do_edit'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birth = $_POST['birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $password_2 = $_POST['password_2'];


            $errors = false;

            if (User::checkEmailExist($email)) {
                $errors[] = 'Данный E-mail уже существует';
            }

            if (User::checkLoginExist($login)) {
                $errors[] = 'Данный логин уже используется';
            }

            if (trim($_POST['name']) == '') {
                $errors[] = 'Укажите ваше Имя!';
            }

            if (trim($_POST['surname']) == '') {
                $errors[] = 'Укажите вашу Фамилию!';
            }

            if (trim($_POST['birth']) == '') {
                $errors[] = 'Укажите вашу дату рождения!';
            }

            if (trim($_POST['email']) == '') {
                $errors[] = 'Укажите ваш E-mail!';
            }

            if (trim($_POST['phone']) == '') {
                $errors[] = 'Укажите ваш Номер телефона!';
            }

            if (trim($_POST['login']) == '') {
                $errors[] = 'Укажите ваш Логин!';
            }

            if ($_POST['password'] == '') {
                $errors[] = 'Укажите ваш Пароль!';
            }

            if ($_POST['password_2'] != $_POST['password']) {
                $errors[] = 'Повторный пароль указан не верно!';
            }

            if ($errors == false) {
                $result = User::edit($userId, $name, $surname, $birth, $email, $phone, $login, $password);
                header('Location: /cabinet/');
            }
        }

        require_once (ROOT . '/app/views/cabinet/edit.php');

        return true;
    }

}