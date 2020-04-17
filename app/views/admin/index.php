<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__item">
    <section class="admin-welcome">
        <div class="admin-welcome__title">Меню</div>
        <div class="admin-welcome-subtitle">
            <ul>
                <li>
                    <a href="/admin/product">Управление товарами</a>
                </li>
                <li>
                    <a href="/admin/category">Управление категориями</a>
                </li>
                <li>
                    <a href="/admin/ticket">Управление абонементами</a>
                </li>
                <li>
                    <a>Управление заказами (Бета)</a>
                </li>
                <li>
                    <a href="/admin/user">Просмотр пользователей</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="admin__hi">
        <p>Добрый день, администратор</p>
        <img src="app\template\img\admin\ananasAdmin.svg" alt="">
    </section>
</main>