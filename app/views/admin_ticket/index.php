<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="panel__title">Управление абонементами</div>
        <div class="panel__item">
            <div class="button__place">
                <div class="panel__button-return">
                    <a href="/admin">
                        <img src="\app\template\img\admin\return1.svg" alt="">
                        <p>Назад</p>
                    </a>
                </div>
                <div class="panel__button-add">
                    <a href="/admin/ticket/create">
                        <img src="\app\template\img\admin\create.svg" alt="">
                        <p>Добавить абонемент</p>
                    </a>
                </div>
            </div>
            <table class="panet__table">
                    <tr>
                        <td class="small__width">ID абонемента</td>
                        <td class="name__product">Наименование</td>
                        <td class="small__width">Кол-во вещей в месяц</td>
                        <td class="small__width">Длительность</td>
                        <td class="small__width">Цена</td>
                        <td class="small__width">Описание</td>
                        <td class="small__width">Порядковый номер</td>
                        <td class="small__width">В наличии</td>
                        <td class="small__width">Редактировать</td>
                        <td class="small__width">Удалить</td>
                    </tr>

                    <?php foreach ($ticketList as $ticket): ?>
                        <tr>
                            <td class="small__width"><?php echo $ticket['id']; ?></td>
                            <td class="name__product"><?php echo $ticket['name']; ?></td>
                            <td class="small__width"><?php echo $ticket['item']; ?></td>
                            <td class="small__width"><?php echo $ticket['duration']; ?> мес.</td>
                            <td class="small__width"><?php echo $ticket['price']; ?> ₽</td>
                            <td class="small__width"><?php echo $ticket['description']; ?></td>
                            <td class="small__width"><?php echo $ticket['sort_order']; ?></td>
                            <td class="small__width"><?php if ($ticket['status'] == 1) echo 'Да'; else echo 'Нет'; ?></td>
                            <td class="small__width"><a href="/admin/ticket/update/<?php echo $ticket['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                            <td class="small__width"><a href="/admin/ticket/delete/<?php echo $ticket['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                        </tr>
                    <?php endforeach; ?>

            </table>
        </div>
    </section>
</main>