<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__item">
    <section class="admin-welcome">
        <div class="admin-welcome__title">Добрый день, администратор</div>
        <div class="admin-welcome-subtitle">
            <ul>
                <li>
                    <a href="#">Управление товарами(Бета)</a>
                </li>
                <li>
                    <a>Управление категориями(Бета)</a>
                </li>
                <li>
                    <a>Управление заказами(Бета)</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="admin-panel">
        <div class="panel__title">Управление товарами(Бета)</div>
        <div class="panel__item">
            <div class="pamel__item-title">Список товаров</div>
            <table class="panet__table">
                    <tr>
                        <td>Id товара</td>
                        <td>Наименование</td>
                        <td>Размер</td>
                        <td>Цвет</td>
                        <td>Редактировать</td>
                        <td>Удалить</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Шорты</td>
                        <td>S</td>
                        <td>black</td>
                        <td></a><img src="app\template\img\admin\eqit.svg" alt="" class='panel__icon'></td>
                        <td><img src="app\template\img\admin\delite.svg" alt="" class='panel__icon'></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Трусы</td>
                        <td>M</td>
                        <td>white</td>
                        <td><img src="app\template\img\admin\eqit.svg" alt="" class='panel__icon'></td>
                        <td><img src="app\template\img\admin\delite.svg" alt="" class='panel__icon'></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Носки</td>
                        <td>L</td>
                        <td>green</td>
                        <td><img src="app\template\img\admin\eqit.svg" alt="" class='panel__icon'></td>
                        <td><img src="app\template\img\admin\delite.svg" alt="" class='panel__icon'></td>
                    </tr>
            </table>
        </div>
    </section>
</main>