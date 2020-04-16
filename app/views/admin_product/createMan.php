<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <h1>Добавить новый товар</h1>
        <form action="#" method="post">
            <label>Наименование товара
                <input type="text" name="name">
            </label>
            <label>Пол
                <select name="gender">
                    <option value="S">Мужчина</option>
                    <option value="M" selected>Женщина</option>
                </select>
            </label>
            <label>Категория
                <select name="size">
                    <option value="S">S</option>
                    <option value="M" selected>M</option>
                    <option value="L">L</option>
                </select>
            </label>
            <label>Размер
                <select name="size">
                    <option value="S">S</option>
                    <option value="M" selected>M</option>
                    <option value="L">L</option>
                </select>
            </label>
            <label>Цвет
                <input type="text" name="color">
            </label>
            <label>В наличии
                <select name="status">
                    <option value="1" selected>Да</option>
                    <option value="0">Нет</option>
                </select>
            </label>
            <button name="submit">Удалить</button>
        </form>
    </section>
</main>