<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="button__place">
                <div class="panel__button-return">
                    <a href="/admin">
                        <img src="\app\template\img\admin\return1.svg" alt="">
                        <p>Назад</p>
                    </a>
                </div>
                <div class="ticket__button-add">
                    <a href="/admin/ticket/create">
                        <img src="\app\template\img\admin\create.svg" alt="">
                        <p>Добавить абонемент</p>
                    </a>
                </div>
            </div>
        <div class="panel__title">Управление абонементами</div>
        <div class="panel__item">
            <table class="panet__table-admin">
                    <tr>
                        <td class="width1 title__admin-ticket">ID абонемента</td>
                        <td class="width2 title__admin-ticket">Наименование</td>
                        <td class="width3 title__admin-ticket">Кол-во вещей в месяц</td>
                        <td class="width4 title__admin-ticket">Длительность</td>
                        <td class="width5 title__admin-ticket">Цена</td>
                        <td class="width6 title__admin-ticket">Описание</td>
                        <td class="width7 title__admin-ticket">Порядковый номер</td>
                        <td class="width8 title__admin-ticket">В наличии</td>
                        <td class="width9 title__admin-ticket">Редактировать</td>
                        <td class="width10 title__admin-ticket">Удалить</td>
                    </tr>

                    <?php foreach ($ticketList as $ticket): ?>
                        <tr>
                            <td class="width1"><?php echo $ticket['id']; ?></td>
                            <td class="width2"><?php echo $ticket['name']; ?></td>
                            <td class="width3"><?php echo $ticket['item']; ?></td>
                            <td class="width4"><?php echo $ticket['duration']; ?> мес.</td>
                            <td class="width5"><?php echo $ticket['price']; ?> ₽</td>
                            <td class="width6 short__content"><?php echo $ticket['description']; ?></td>
                            <td class="width7"><?php echo $ticket['sort_order']; ?></td>
                            <td class="width8"><?php if ($ticket['status'] == 1) echo 'Да'; else echo 'Нет'; ?></td>
                            <td class="width9"><a href="/admin/ticket/update/<?php echo $ticket['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                            <td class="width10"><a href="/admin/ticket/delete/<?php echo $ticket['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                        </tr>
                    <?php endforeach; ?>

            </table>
        </div>
    </section>
</main>

<script>

(function () {

const cropElement = document.querySelectorAll('.short__content'),
      size = 60                               
      endCharacter = '...'                                  

cropElement.forEach(el => {
    let text = el.innerHTML;

    if (el.innerHTML.length > size) {
        text = text.substr(0, size);
        el.innerHTML = text + endCharacter;
    }
});

}());
</script>