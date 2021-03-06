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
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
            } elseif (strlen(trim($_POST['name'])) < 2) {
                $errors[] = 'Имя должно содержать не менее 2 символов';
            }

            if (trim($_POST['surname']) == '') {
                $errors[] = 'Укажите вашу Фамилию!';
            } elseif (strlen(trim($_POST['surname'])) < 2) {
                $errors[] = 'Фамилия должна содержать не менее 2 символов';
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
            } elseif (strlen(trim($_POST['login'])) < 4) {
                $errors[] = 'Логин должен содержать не менее 4 символов';
            }

            if ($_POST['password'] == '') {
                $errors[] = 'Укажите ваш Пароль!';
            } elseif (strlen(trim($_POST['password'])) < 6) {
                $errors[] = 'Пароль должнен быть не короче 6 символов';
            }

            if ($_POST['password_2'] != $_POST['password']) {
                $errors[] = 'Повторный пароль указан не верно!';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя и запоминаем в сессию
                $id = User::register($name, $surname, $birth, $email, $phone, $login, $password, $bonus);
                $userId = User::checkUserData($login, $password);
                User::auth($userId);

                // Перенаправляем пользователя в личный кабинет
                header("Location: /cabinet/");
            }
        }

        // Подключаем виды
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
					 $_SESSION['logged-user'] = $userId;
					 $_SESSION['login'] = $login;
					 $_SESSION['auth'] = true; // это понадобится для кукис

					 //Проверяем, что была нажата галочка 'Запомнить меня':
					 if (!empty($_POST['remember']) and $_POST['remember'] == 1) {
						 //Сформируем случайную строку для куки (используем функцию generateSalt):
						 $key = User::generateSalt(); //назовем ее $key

						 //Пишем куки (имя куки, значение, время жизни - сейчас+месяц)
						 setcookie('login', $login, time()+60*60*24*30*12, '/'); // Логин
						 setcookie('key', $key, time()+60*60*24*30*12, '/'); // случайная строка
						 User::setValueCookie($login, $key);
					 }

                // Перенаправляем пользователя в закрытую часть - кабинет
                 header("Location: /cabinet/");
            }

        }

        require_once(ROOT . '/app/views/user/login.php');
        return true;
    }

    public function actionLogout()
    {

        //Если переменная auth из сессии не пуста и равна true, то...
        if (!empty($_SESSION['auth']) and $_SESSION['auth']) {
            unset($_SESSION['logged-user']);

            //Удаляем куки авторизации путем установления времени их жизни на текущий момент:
            setcookie('login', null, -1, '/'); //удаляем логин
            setcookie('key', null, -1, '/'); //удаляем ключ


            header("Location: /");
        }

    }

}