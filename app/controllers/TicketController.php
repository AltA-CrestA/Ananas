<?php


use App\models\Ticket;

class TicketController
{

    public function actionIndex()
    {

        $latestTickets = array();
        $latestTickets = Ticket::getLatestTickets(50);

        require_once(ROOT . '/app/views/ticket/index.php');

        return true;

    }

}