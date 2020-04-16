<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="panel__title">Управление товарами(Бета)</div>
        <div class="panel__item">
            <div class="pamel__item-title">Список товаров</div>
            <table class="panet__table">
                    <tr>
                        <td class="small__width">ID товара</td>
                        <td class="name__product">Наименование</td>
                        <td class="small__width">Пол</td>
                        <td class="small__width">ID категории</td>
                        <td class="small__width">Размер</td>
                        <td class="small__width">Цвет</td>
                        <td class="small__width">Редактировать</td>
                        <td class="small__width">Удалить</td>
                    </tr>

                    <?php foreach ($productList as $product): ?>
                        <tr>
                            <td class="small__width"><?php echo $product['id']; ?></td>
                            <td class="name__product"><?php echo $product['name']; ?></td>
                            <td class="small__width"><?php echo $product['gender']; ?></td>
                            <td class="small__width"><?php echo $product['category_id']; ?></td>
                            <td class="small__width"><?php echo $product['size']; ?></td>
                            <td class="small__width"><?php echo $product['color']; ?></td>
                            <td class="small__width"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></td>
                            <td class="small__width"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></td>
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