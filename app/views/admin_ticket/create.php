<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__creating">
    <div class="panel__button-return create__return">
        <a href="/admin/ticket">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Добавить новый абонемент</h1>
        <form action="#" method="post" class="create__form">
            <label><p>Наименование абнемента</p></label>
            <input type="text" name="name" placeholder="Введите наименование">
            <label><p>Количество вещей в месяц</p></label>
            <input type="number" name="item" class="select__down">
            <label><p>Длительность абнемента</p></label>
            <input type="number" name="duration" class="select__down">
            <label><p>Стоимость абонемента</p></label>
            <input type="number" name="price" class="select__down">
            <label><p>Описание абонемента</p></label>
            <textarea name="description" class="textarea__change"></textarea>
            <label><p>Номер по порядку сортировки</p></label>
            <input type="number" name="sort_order">
            <label><p>Статус</p>
            </label>
            <div class="select">
                <select name="status" class="option__create">
                    <option selected disabled><p>Выберите наличие</p></option>
                    <option value="1">Отображается</option>
                    <option value="0">Не отображается</option>
                </select>
            </div>
            <button type="submit" name="submit" class="create__button">Добавить абонемент</button>
        </form>
    </section>
</main>