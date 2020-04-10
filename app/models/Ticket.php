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

}