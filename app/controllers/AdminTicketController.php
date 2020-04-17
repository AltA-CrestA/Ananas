<?php

use App\components\AdminBase;
use App\models\Ticket;


/**
 * Контроллер AdminTicketController
 * Управление абонементами в админпанели
 */
class AdminTicketController extends AdminBase
{

    /**
     * Action для страницы управление абонементами
     */
    public function actionIndex()
    {

        // Проверка доступа
        self::checkAdmin();

        // Получаем список абонементов
        $ticketList = Ticket::getTicketsListAdmin();

        // Подкючаем вид
        require_once (ROOT . '/app/views/admin_ticket/index.php');
        return true;

    }

    /**
     * Action для страницы добавить абонемент
     */
    public function actionCreate()
    {

        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные формы
            $options['name'] = $_POST['name'];
            $options['item'] = $_POST['item'];
            $options['duration'] = $_POST['duration'];
            $options['price'] = $_POST['price'];
            $options['description'] = $_POST['description'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужым образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                Ticket::createTicket($options);

                header("Location: /admin/ticket");
            }
        }

        // Подключим вид
        require_once (ROOT . '/app/views/admin_ticket/create.php');
        return true;

    }

    public function actionUpdate($id)
    {

        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном абонементе
        $ticket = Ticket::getTicketById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные формы
            $options['name'] = $_POST['name'];
            $options['item'] = $_POST['item'];
            $options['duration'] = $_POST['duration'];
            $options['price'] = $_POST['price'];
            $options['description'] = $_POST['description'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            // Сохраняем изменения
            Ticket::updateTicketById($id, $options);

            header("Location: /admin/ticket");
        }

        // Подключим вид
        require_once (ROOT . '/app/views/admin_ticket/update.php');
        return true;

    }

    public function actionDelete($id)
    {

        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Ticket::deleteTicketById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/ticket");
        }

        // Подключаем вид
        require_once (ROOT . '/app/views/admin_ticket/delete.php');
        return true;

    }

}