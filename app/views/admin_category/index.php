<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="button__place">
            <div class="panel__button-return">
                <a href="/admin/">
                    <img src="\app\template\img\admin\return1.svg" alt="">
                    <p>Назад</p>
                </a>
            </div>
            <div class="add__category">
                <a href="/admin/category/create/">
                    <img src="\app\template\img\admin\create.svg" alt="">
                    <p>Добавить категорию</p>
                </a>
            </div>
        </div>
        <div class="panel__title">Управление категориями(Бета)</div>
        <div class="panel__item">
            <div class="admin__tabs">
                <div class="tabs__items-admin">
                    <span class="tabs__item-admin is-active" data-tab-name="tab-1">Женское</span>
                    <span class="tabs__item-admin" data-tab-name="tab-2">Мужское</span>
                    <span class="tabs__item-admin" data-tab-name="tab-3">Не знаю кто я</span>
                </div>
                <div class="tabs__body-admin">
                    <div class="tabs__block-admin tab-1 is-active">
                            <div class="tabs__block-title-admin"></div>
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
                                    <td class="small__width"><?php if ($categoryWoman['status'] == 1) echo 'Отображается'; else echo 'Не отображается'; ?></td>
                                    <td class="small__width"><a href="/admin/category/update/<?php echo $categoryWoman['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                                    <td class="small__width"><a href="/admin/category/delete/<?php echo $categoryWoman['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                                </tr>
                                <?php endforeach; ?>
                            </table> 
                    </div>
                    <div class="tabs__block-admin tab-2">
                            <div class="tabs__block-title-admin"></div>
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
                                    <td class="small__width"><?php if ($categoryMan['status'] == 1) echo 'Отображается'; else echo 'Не отображается'; ?></td>
                                    <td class="small__width"><a href="/admin/category/update/<?php echo $categoryMan['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                                    <td class="small__width"><a href="/admin/category/delete/<?php echo $categoryMan['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                    </div>
                    <div class="tabs__block-admin tab-3">
                        <table class="panet__table-admin">
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
                                    <td class="small__width"><?php if ($categoryAll['status'] == 1) echo 'Отображается'; else echo 'Не отображается'; ?></td>
                                    <td class="small__width"><a href="/admin/category/update/<?php echo $categoryAll['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                                    <td class="small__width"><a href="/admin/category/delete/<?php echo $categoryAll['id']; ?>"><img src="\app\template\img\admin\delite.svg" alt="" class='panel__icon'></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    // Таб админки
    $('.tabs__block-admin').not(':first').hide();
    $('.admin__tabs .tabs__item-admin')
        .click(function () {
        $('.admin__tabs .tabs__item-admin')
            .removeClass('active')
            .eq($(this).index())
            .addClass('active');
        $('.tabs__block-admin').hide().eq($(this).index()).fadeIn();
    })
    .eq(0)
    .addClass('active');
</script>