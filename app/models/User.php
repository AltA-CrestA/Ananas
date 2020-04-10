<?php

namespace App\models;

use App\components\Db;
use PDO;


class User
{

    public static function register($name, $surname, $birth, $email, $phone, $login, $password, $bonus)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO users (name, surname, birth, email, phone, login, password, bonus) '
                . 'VALUES (:name, :surname, :birth, :email, :phone, :login, :password, :bonus)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':surname', $surname, PDO::PARAM_STR);
        $result->bindParam(':birth', $birth, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':bonus', $bonus, PDO::PARAM_STR);

        return $result->execute();

    }

    public static function edit($id, $name, $surname, $birth, $email, $phone, $login, $password)
    {

        $db = Db::getConnection();

        $sql = "UPDATE users
                SET name = :name, surname = :surname, birth = :birth, email = :email, phone = :phone, login = :login, password = :password
                WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':surname', $surname, PDO::PARAM_STR);
        $result->bindParam(':birth', $birth, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return$result->execute();

    }

    public static function checkLoginExist($login)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE login = :login';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;

    }

    public static function checkEmailExist($email)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    public static function checkUserData($login, $password)
    {

        $db = Db::getConnection();

        $sql = 'SELECT * FROM users WHERE login = :login AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }

        return false;
    }


    public static function auth($userId)
    {
        $_SESSION['logged-user'] = $userId;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернёт индетификатор пользователя
        if (isset($_SESSION['logged-user'])) {
            return $_SESSION['logged-user'];
        }

        header("Location: /user/login");

    }

    public static function isGuest()
    {

        if (isset($_SESSION['logged-user'])) {
            return false;
        }
        return true;

    }

    public static function getUserById($id)
    {

        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM users WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }

    }
}