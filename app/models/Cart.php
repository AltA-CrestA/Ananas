<?php


namespace App\models;


class Cart
{

    public static function addTicket($id)
    {

        $id = intval($id);

        // Пустой массив для абонементов в корзине
        $ticketsInCart = array();

        // Если в корзине уже есть абонементы (они хранятся в сессии)
        if (isset($_SESSION['tickets'])) {
            // То заполним наш массив абонементами
            $ticketsInCart = $_SESSION['tickets'];
        }

        // Если абонемент уже есть в корзине, но был добавлен ещё раз, увеличим количество
        if (array_key_exists($id, $ticketsInCart)) {
            $ticketsInCart[$id] ++;
        } else {
            // Добавляем новый абонемент в корзину
            $ticketsInCart[$id] = 1;
        }

        $_SESSION['tickets'] = $ticketsInCart;

        return self::countItems();

    }

    /**
     * Подсчёт количества абонементов в корзине (в сессии)
     * @return int
     */

    public static function countItems()
    {

        if (isset($_SESSION['tickets'])) {
            $count = 0;
            foreach ($_SESSION['tickets'] as $id=> $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }

    }

    public static function getTickets()
    {

        if (isset($_SESSION['tickets'])) {
            return $_SESSION['tickets'];
        }
        return false;
    }

    public static function getTotalPrice($tickets)
    {

        $ticketsInCart = self::getTickets();

        if ($ticketsInCart) {
            $total = 0;
            foreach ($tickets as $ticket) {
                $total += $ticket['price'] * $ticketsInCart[$ticket['id']];
            }
        }

        return $total;

    }

    public static function deleteTicket($id)
    {

        // Получаем массив с идентификаторами и количеством абнементов в корзине
        $ticketsInCart = self::getTickets();

        // Удаляем из массива элемент с указанным id
        if (isset($ticketsInCart)){
            unset($ticketsInCart[$id]);
        }

        // Записываем массив абонементов с удаленным элементом в сессию
        $_SESSION['tickets'] = $ticketsInCart;

    }

}