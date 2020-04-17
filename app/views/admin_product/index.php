<?php use App\models\Category;

include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="button__place">
                <div class="panel__button-return">
                    <a href="/admin">
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
        <div class="panel__title">Управление товарами(Бета)</div>
        <div class="panel__item">
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
                            <td class="small__width"><?php if ($product['gender'] == 0) echo 'Ж'; else echo 'М'; ?></td>
                            <td class="small__width"> <?php echo Category::getCategoryText($product['category_all_id'])?></td>
                            <td class="small__width"><?php echo $product['size']; ?></td>
                            <td class="small__width"><?php echo $product['color']; ?></td>
                            <td class="small__width"><?php if ($product['status'] == 1) echo 'Да'; else echo 'Нет'; ?></td>
                            <td class="small__width"><a href="/admin/product/update/<?php echo $product['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                            <td class="small__width"><a href="/admin/product/delete/<?php echo $product['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                        </tr>
                    <?php endforeach; ?>

            </table>
        </div>
    </section>
</main>