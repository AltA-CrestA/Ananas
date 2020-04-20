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
            <!-- Наименование -->
            <label>Наименование категории</label>
            <input type="text" name="name" placeholder="Введите наименование">
            <!-- Пол -->
            <label>Пол для категории</label>
            <div class="select">
                <select name="gender" class="option__create">
                    <option value="0" selected>Женский</option>
                    <option value="1">Мужской</option>
                    <option value="2">Не знаю кто я</option>
                </select>
            </div>
            <!-- Номер п/п -->
            <label>Номер по порядку сортировки</label>
            <input type="number" name="sort_order">
            <!-- Статус -->
            <label>Статус</label>
            <div class="select">
                <select name="status" class='option__create'>
                    <option value="1" selected>Отображается</option>
                    <option value="0">Не отображается</option>
                </select>
            </div>
            <button type="submit" name="submit" class="create__button">Добавить категорию</button>
        </form>
    </section>
</main>