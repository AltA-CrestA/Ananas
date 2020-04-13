<?php


namespace App\components;

use App\models\User;

/**
 * Абстрактный класс AdminBase содержит общую логику для контроллеров, которые
 * используются в панели администратора
 */

abstract class AdminBase
{

    /**
     * Метод который проверяет пользователя на то, является ли он администратором
     *""куегкт boolean
     */
    public static function checkAdmin()
    {

        // Проверяем авторизирован ли пользователь. Если нет, он будет переадресован
        $userId = User::checkLogged();

        // Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);

        // Если роль текущего пользователя "admin", пускаем его в админпанель
        if ($user['role'] == 'admin') {
            return true;
        }

        // Иначе заверщаем работу с сообщением об закрытом доступе
        die('Access denied');

    }

}