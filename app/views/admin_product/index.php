<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="panel__title">Управление товарами(Бета)</div>
        <div class="panel__item">
            <div class="button__place">
                <div class="panel__button-return">
                    <a href="/admin/product/select">
                        <img src="\app\template\img\admin\return1.svg" alt="">
                        <p>Назад</p>
                    </a>
                </div>
                <div class="panel__button-add">
                    <a href="/admin/product/select">
                        <img src="\app\template\img\admin\create.svg" alt="">
                        <p>Добавить товар</p>
                    </a>
                </div>
            </div>
            <table class="panet__table">
                    <tr>
                        <td class="small__width">ID товара</td>
                        <td class="name__product">Наименование</td>
                        <td class="small__width">Пол</td>
                        <td class="small__width">Категория товара</td>
                        <td class="small__width">Размер</td>
                        <td class="small__width">Цвет</td>
                        <td class="small__width">В наличии</td>
                        <td class="small__width">Редактировать</td>
                        <td class="small__width">Удалить</td>
                    </tr>

                    <?php foreach ($productList as $product): ?>
                        <tr>
                            <td class="small__width"><?php echo $product['id']; ?></td>
                            <td class="name__product"><?php echo $product['name']; ?></td>
                            <td class="small__width"><?php if ($product['gender'] == 0) {echo 'Ж';} else {echo 'М';} ?></td>
                            <td class="small__width">
                                <?php if ($product['category_all_id'] == 12){echo 'Верхняя одежда';}
                                    elseif ($product['category_all_id'] == 13){echo 'Рубашки/блузки/футболки';}
                                    elseif ($product['category_all_id'] == 14){echo 'Свитера/толстовки';}
                                    elseif ($product['category_all_id'] == 15){echo 'Платья/юбки';}
                                    elseif ($product['category_all_id'] == 16){echo 'Джинсы/шорты';}
                                    elseif ($product['category_all_id'] == 17){echo 'Аксессуары';} ?>
                            </td>
                            <td class="small__width"><?php echo $product['size']; ?></td>
                            <td class="small__width"><?php echo $product['color']; ?></td>
                            <td class="small__width"><?php if ($product['status'] == 1){echo 'Да';}else{echo 'Нет';} ?></td>
                            <td class="small__width"><a href="/admin/product/update/<?php echo $product['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                            <td class="small__width"><a href="/admin/product/delete/<?php echo $product['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                        </tr>
                    <?php endforeach; ?>

            </table>
        </div>
    </section>
</main>