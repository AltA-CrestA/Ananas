<?php


namespace App\models;


use App\components\Db;
use PDO;

class Ticket
{

    const SHOW_BY_DEFAULT = 4;

    /**
     * returns an array of tickets
     */
    public static function getLatestTickets($count = self::SHOW_BY_DEFAULT)
    {

        $count = intval($count);

        $db = Db::getConnection();

        $ticketList = array();

        $result = $db->query('SELECT * FROM tickets '
                . 'WHERE status = "1" '
                . 'ORDER BY id ASC '
                . 'LIMIT ' .$count);

        $i = 0;
        while ($row = $result->fetch()) {
            $ticketList[$i]['id'] = $row['id'];
            $ticketList[$i]['name'] = $row['name'];
            $ticketList[$i]['item'] = $row['item'];
            $ticketList[$i]['duration'] = $row['duration'];
            $ticketList[$i]['price'] = $row['price'];
            $ticketList[$i]['description'] = $row['description'];
            $i++;
        }

        return $ticketList;

    }

    public static function getTicketsByIds($idsArray)
    {

        $tickets = array();

        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM tickets WHERE status = 1 AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $tickets[$i]['id'] = $row['id'];
            $tickets[$i]['name'] = $row['name'];
            $tickets[$i]['price'] = $row['price'];
            $i++;
        }

        return $tickets;

    }

    public static function getTicketsListAdmin()
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Запрос в БД
        $result = $db->query('SELECT * FROM tickets ORDER BY sort_order ASC ');

        // Получение и возврат результатов
        $ticketList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ticketList[$i]['id'] = $row['id'];
            $ticketList[$i]['name'] = $row['name'];
            $ticketList[$i]['item'] = $row['item'];
            $ticketList[$i]['duration'] = $row['duration'];
            $ticketList[$i]['price'] = $row['price'];
            $ticketList[$i]['description'] = $row['description'];
            $ticketList[$i]['sort_order'] = $row['sort_order'];
            $ticketList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ticketList;

    }

    public static function getTicketById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM tickets WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    /**
     * Добавляет новый абонемент
     * @param array $options <p>Массив с информацией об абонементе</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createTicket($options)
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса в БД
        $sql = 'INSERT INTO tickets '
            . '(name, item, duration, price, description, sort_order, status) '
            . 'VALUES '
            . '(:name, :item, :duration, :price, :description, :sort_order, :status)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':item', $options['item'], PDO::PARAM_STR);
        $result->bindParam(':duration', $options['duration'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        return $result->execute();

    }

    public static function updateTicketById($id, $options)
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса в БД
        $sql = "UPDATE tickets
            SET
                name = :name,
                item = :item,
                duration = :duration,
                price = :price,
                description = :description,
                sort_order = :sort_order,
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':item', $options['item'], PDO::PARAM_STR);
        $result->bindParam(':duration', $options['duration'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        return $result->execute();

    }

    public static function deleteTicketById($id)
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM tickets WHERE id = :id';

        // Получение и возврат результатов. Используеся подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();

    }

}