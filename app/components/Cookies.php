<?php

namespace App\components;

use App\models\User;

class Cookies
{

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
	public function checkCookies()
	{

		if (empty($_SESSION['auth']) or $_SESSION['auth'] == false) {
			//Проверяем, не пустые ли нужные нам куки...
			if ( !empty($_COOKIE['login']) and !empty($_COOKIE['key']) ) {
				//Пишем логин и ключ из КУК в переменные (для удобства работы):
				$login = $_COOKIE['login']; 
				$key = $_COOKIE['key']; //ключ из кук (аналог пароля, в базе поле cookie)
				$result = User::getCookie($login, $key);

				//Если база данных вернула не пустой ответ - значит пара логин-ключ_к_кукам подошла...
				if (!empty($result)) {
					//Пишем в сессию информацию о том, что мы авторизовались:
					$_SESSION['auth'] = true;
					$userId = User::getIdByKey($key);

					/*
					Пишем в сессию логин и id пользователя
					(их мы берем из переменной $user!):
					*/
					$_SESSION['logged-user'] = $userId;
					$_SESSION['login'] = $login;
				}
			}
		}

	}

}