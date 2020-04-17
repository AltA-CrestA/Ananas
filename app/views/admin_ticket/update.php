<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__creating">
    <div class="panel__button-return create__return">
        <a href="/admin/ticket">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Редактировать абонемент #<?php echo $id; ?></h1>
        <form action="#" method="post" class="create__form">
            <label><p>Наименование абонемента</p></label>
            <input type="text" name="name" value="<?php echo $ticket['name']; ?>">
            <label><p>Количество вещей в месяц</p></label>
            <input type="number" name="item" class="select__down" value="<?php echo $ticket['item']; ?>">
            <label><p>Длительность абнемента</p></label>
            <input type="number" name="duration" class="select__down" value="<?php echo $ticket['duration']; ?>">
            <label><p>Стоимость абонемента</p></label>
            <input type="number" name="price" class="select__down" value="<?php echo $ticket['price']; ?>">
            <label><p>Описание абонемента</p></label>
            <textarea name="description" class="textarea__change"><?php echo $ticket['description']; ?></textarea>
            <label><p>Номер по порядку сортировки</p></label>
            <input type="number" name="sort_order" value="<?php echo $ticket['sort_order']; ?>">
            <label><p>Статус</p>
            </label>
            <div class="select">
                <select name="category_id" class="option__create">
                    <option value="1" <?php if ($ticket['status'] == '1') echo 'selected';?>>Отображается</option>
                    <option value="0" <?php if ($ticket['status'] == '1') echo 'selected';?>>Не отображается</option>
                </select>
            </div>
            <button type="submit" name="submit" class="create__button">Изменить</button>
        </form>
    </section>
</main>