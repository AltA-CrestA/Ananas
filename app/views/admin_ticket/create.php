<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <div class="panel__button-return create__return">
        <a href="/admin/ticket">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Добавить новый абонемент</h1>
        <form action="#" method="post" class="create__form">
            <label>
                <p>Наименование абнемента</p>
                <input type="text" name="name" placeholder="Введите наименование">
            </label>
            <label>
                <p>Количество вещей в месяц</p>
                <input type="number" name="item" class="select__down">
            </label>
            <label>
                <p>Длительность абнемента</p>
                <input type="number" name="duration" class="select__down">
            </label>
            <label>
                <p>Стоимость абонемента</p>
                <input type="number" name="price" class="select__down">
            </label>
            <label>
                <p>Описание абонемента</p>
                <textarea name="description"></textarea>
            </label>
            <label>
                <p>Номер по порядку сортировки</p>
                <input type="number" name="sort_order">
            </label>
            <label>
                <p>Статус</p>
                <select name="status" class='select__down'>
                    <option value="1" selected>Отображается</option>
                    <option value="0">Не отображается</option>
                </select>
            </label>
            <button type="submit" name="submit" class="create__button">Добавить абонемент</button>
        </form>
    </section>
</main>