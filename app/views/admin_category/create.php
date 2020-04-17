<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <div class="panel__button-return create__return">
        <a href="/admin/category/">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Добавить новую категорию</h1>
        <form action="#" method="post" class="create__form">
            <label>
                <p>Наименование категории</p>
                <input type="text" name="name" placeholder="Введите наименование">
            </label>
            <label>
                <p>Пол для категории</p>
                <select name="gender" class="select__down">
                    <option value="0" selected>Женский</option>
                    <option value="1">Мужской</option>
                    <option value="2">Не знаю кто я</option>
                </select>
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
            <button type="submit" name="submit" class="create__button">Добавить категорию</button>
        </form>
    </section>
</main>