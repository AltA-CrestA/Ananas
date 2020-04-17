<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="panel__title">Управление категориями(Бета)</div>
        <div class="panel__item">
            <div class="button__place">
                <div class="panel__button-return">
                    <a href="/admin">
                        <img src="\app\template\img\admin\return1.svg" alt="">
                        <p>Назад</p>
                    </a>
                </div>
                <div class="panel__button-add">
                    <a href="/admin">
                        <img src="\app\template\img\admin\create.svg" alt="">
                        <p>Добавить категорию</p>
                    </a>
                </div>
            </div>
            <table class="panet__table">
                <tr>
                    <td class="small__width">ID категории</td>
                    <td class="name__product">Наименование</td>
                    <td class="small__width">Порядок сортировки</td>
                    <td class="small__width">Статус</td>
                    <td class="small__width">Редактировать</td>
                    <td class="small__width">Удалить</td>
                </tr>

                <?php foreach ($categoryListAll as $categoryAll): ?>
                    <tr>
                        <td class="small__width"><?php echo $categoryAll['id']; ?></td>
                        <td class="name__product"><?php echo $categoryAll['name']; ?></td>
                        <td class="small__width"><?php echo $categoryAll['sort_order']; ?></td>
                        <td class="small__width"><?php echo $categoryAll['status']; ?></td>
                        <td class="small__width"><a href="/admin/product/update/<?php echo $categoryAll['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                        <td class="small__width"><a href="/admin/product/delete/<?php echo $categoryAll['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <table class="panet__table">
                <tr>
                    <td class="small__width">ID категории</td>
                    <td class="name__product">Наименование</td>
                    <td class="small__width">Порядок сортировки</td>
                    <td class="small__width">Статус</td>
                    <td class="small__width">Редактировать</td>
                    <td class="small__width">Удалить</td>
                </tr>

                <?php foreach ($categoryListWoman as $categoryWoman): ?>
                    <tr>
                        <td class="small__width"><?php echo $categoryWoman['id']; ?></td>
                        <td class="name__product"><?php echo $categoryWoman['name']; ?></td>
                        <td class="small__width"><?php echo $categoryWoman['sort_order']; ?></td>
                        <td class="small__width"><?php echo $categoryWoman['status']; ?></td>
                        <td class="small__width"><a href="/admin/product/update/<?php echo $categoryWoman['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                        <td class="small__width"><a href="/admin/product/delete/<?php echo $categoryWoman['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <table class="panet__table">
                <tr>
                    <td class="small__width">ID категории</td>
                    <td class="name__product">Наименование</td>
                    <td class="small__width">Порядок сортировки</td>
                    <td class="small__width">Статус</td>
                    <td class="small__width">Редактировать</td>
                    <td class="small__width">Удалить</td>
                </tr>

                <?php foreach ($categoryListMan as $categoryMan): ?>
                    <tr>
                        <td class="small__width"><?php echo $categoryMan['id']; ?></td>
                        <td class="name__product"><?php echo $categoryMan['name']; ?></td>
                        <td class="small__width"><?php echo $categoryMan['sort_order']; ?></td>
                        <td class="small__width"><?php echo $categoryMan['status']; ?></td>
                        <td class="small__width"><a href="/admin/product/update/<?php echo $categoryMan['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                        <td class="small__width"><a href="/admin/product/delete/<?php echo $categoryMan['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </section>
</main>