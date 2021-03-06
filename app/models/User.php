<?php

namespace App\models;

use App\components\Db;
use PDO;


class User
{

    public static function register($name, $surname, $birth, $email, $phone, $login, $password, $bonus)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO users (name, surname, birth, email, phone, login, password, bonus, salt) '
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
        $result->execute();


        return $db->lastInsertId();

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
        $result->execute();

        $user = $result->fetch();

        return $user['id'];

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
	 
    public static function generateSalt()
    {

			$salt = '';
			$saltLength = 8; // длина соли
			for($i = 0; $i < $saltLength; $i++) {
				$salt .= chr(mt_rand(33,126)); // символ из ASCII-table
			}
			return $salt;

    }

    public static function checkUserData($login, $password)
    {

        $db = Db::getConnection();

        $sql = 'SELECT * FROM users WHERE login = :login';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if (password_verify($password, $user['password'])) {
            return $user['id'];
        } else {
            return false;
        }

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
	 
	 public static function setValueCookie($login, $key)
	 {

			$db = Db::getConnection();

			// Текст запроса в БД
			$sql = "UPDATE users
				SET
					cookie = :cookie
				WHERE login = :login";
			
			// Получение и возврат результатов. Используется подготовленный запрос
			$result = $db->prepare($sql);
			$result->bindParam(':login', $login, PDO::PARAM_STR);
			$result->bindParam(':cookie', $key, PDO::PARAM_STR);
			return $result->execute();

	 }

	 /*
		Если пользователь не авторизован (проверяем по сессии) -
		тогда проверим его куки, если в куках есть логин и ключ,
		то пробьем их по базе данных.
		Если пара логин-ключ подходит - пишем авторизуем пользователя.

		Если пользователь авторизован - ничего не делаем. 
		Поэтому этот код должен вызываться всегда при заходе пользователя на сайт -
		нагрузку на сервер он не создает.

		Если пустая переменная auth из сессии ИЛИ она равна false (для авторизованного она true).
	*/
	 public static function getCookie($login, $key)
	 {

			$db = Db::getConnection();
			$sql = 'SELECT * FROM users WHERE login = :login AND cookie = :cookie';

			$result = $db->prepare($sql);
			$result->bindParam(':login', $login, PDO::PARAM_STR);
			$result->bindParam(':cookie', $key, PDO::PARAM_STR);

			$result->setFetchMode(PDO::FETCH_ASSOC);
			$result->execute();

			return $result->fetch();

	 }

	 public static function getIdByKey($key)
     {

         $db = Db::getConnection();

         $sql = 'SELECT * FROM users WHERE cookie = :cookie';

         $result = $db->prepare($sql);
         $result->bindParam(':cookie', $key, PDO::PARAM_STR);
         $result->execute();

         $user = $result->fetch();

         return $user['id'];

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

    public static function getUsersListAdmin()
    {

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM users ORDER BY id ASC');
        $usersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $usersList[$i]['id'] = $row['id'];
            $usersList[$i]['name'] = $row['name'];
            $usersList[$i]['surname'] = $row['surname'];
            $usersList[$i]['birth'] = $row['birth'];
            $usersList[$i]['email'] = $row['email'];
            $usersList[$i]['phone'] = $row['phone'];
            $usersList[$i]['login'] = $row['login'];
            $usersList[$i]['bonus'] = $row['bonus'];
            $usersList[$i]['role'] = $row['role'];
            $i++;
        }

        return $usersList;

    }

    public static function updateUserById($id, $role)
    {

        $db = Db::getConnection();

        // Текст запроса в БД
        $sql = "UPDATE users
            SET
                role = :role
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':role', $role, PDO::PARAM_STR);
        return $result->execute();

    }
}