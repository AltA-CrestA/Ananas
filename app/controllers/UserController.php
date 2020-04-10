<?php

use App\models\User;

class UserController
{

    public function actionRegister()
    {

        $name = '';
        $surname = '';
        $birth = '';
        $email = '';
        $phone = '';
        $login = '';
        $password = '';
        $password_2 = '';
        $bonus = '';

        if (isset($_POST['do_signup'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birth = $_POST['birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $password_2 = $_POST['password_2'];
            $bonus = $_POST['bonus'];

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
                $result = User::register($name, $surname, $birth, $email, $phone, $login, $password, $bonus);
                header("Location: /cabinet/");
            }
        }



        require_once(ROOT . '/app/views/user/register.php');

        return true;

    }

    public function actionLogin()
    {
        $login = '';
        $password = '';

        if (isset($_POST['do_login'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $errors = false;

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($login, $password);

            if ($userId == false) {
                $errors[] = 'Неправильно введён логин или пароль';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet/");
            }

        }

        require_once(ROOT . '/app/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {

        unset($_SESSION['logged-user']);
        header("Location: /");

    }

}