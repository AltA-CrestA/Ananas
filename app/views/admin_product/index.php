<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__item">
    <section class="admin-welcome">
        <div class="admin-welcome__title">Меню</div>
        <div class="admin-welcome-subtitle">
            <ul>
                <li>
                    <a href="#">Управление товарами (Бета)</a>
                </li>
                <li>
                    <a>Управление категориями (Бета)</a>
                </li>
                <li>
                    <a>Управление заказами (Бета)</a>
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
                        <td>ID товара</td>
                        <td>Наименование</td>
                        <td>Пол</td>
                        <td>ID категории</td>
                        <td>Размер</td>
                        <td>Цвет</td>
                        <td>Редактировать</td>
                        <td>Удалить</td>
                    </tr>

                    <?php foreach ($productList as $product): ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['gender']; ?></td>
                            <td><?php echo $product['category_id']; ?></td>
                            <td><?php echo $product['size']; ?></td>
                            <td><?php echo $product['color']; ?></td>
                            <td><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></td>
                            <td><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></td>
                        </tr>
                    <?php endforeach; ?>
<!--                    <tr>-->
<!--                        <td>2</td>-->
<!--                        <td>Трусы</td>-->
<!--                        <td>M</td>-->
<!--                        <td>white</td>-->
<!--                        <td><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></td>-->
<!--                        <td><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>3</td>-->
<!--                        <td>Носки</td>-->
<!--                        <td>L</td>-->
<!--                        <td>green</td>-->
<!--                        <td><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></td>-->
<!--                        <td><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></td>-->
<!--                    </tr>-->
            </table>
        </div>
    </section>
</main>