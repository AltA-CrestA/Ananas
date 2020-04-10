<?php

use App\models\Cart;
use App\models\Ticket;

class CartController
{

    public function actionIndex()
    {

        $ticketsInCart = false;

        // Получим данные из корзины
        $ticketsInCart = Cart::getTickets();

        if ($ticketsInCart) {
            // Получаем полную информацию об абонементах для списка
            $ticketsIds = array_keys($ticketsInCart);
            $tickets = Ticket::getTicketsByIds($ticketsIds);

            // Получаем общую стоимость абонементов
            $totalPrice = Cart::getTotalPrice($tickets);
        }

        require_once(ROOT . '/app/views/cart/index.php');

        return true;

    }

    public function actionAdd($id)
    {

        // Добавляем товар в корзину
        Cart::addTicket($id);

        // Возварщаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");

    }

    public function actionAddAjax($id)
    {

        //Добавляем абонемент в корзину
        echo Cart::addTicket($id);
        return true;

    }

    public function actionDelete($id)
    {

        // Удаляем заданный абонемент из корзины
        Cart::deleteTicket($id);

        // Возвращаем пользователя в корзину
//        header("Location: /cart/");

    }

}