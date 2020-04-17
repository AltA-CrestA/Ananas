<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <div class="button__place">
                <div class="panel__button-return">
                    <a href="/admin">
                        <img src="\app\template\img\admin\return1.svg" alt="">
                        <p>Назад</p>
                    </a>
                </div>
<!--                <div class="panel__button-add">-->
<!--                    <a href="/admin/product/select">-->
<!--                        <img src="\app\template\img\admin\create.svg" alt="">-->
<!--                        <p>Добавить товар</p>-->
<!--                    </a>-->
<!--                </div>-->
        </div>
        <div class="panel__title">Список пользователей</div>
        <div class="panel__item">
            <table class="panet__table-user">
                <tr>
                    <td class="small__width">ID пользователя</td>
                    <td class="name__product">Имя</td>
                    <td class="small__width">Фамилия</td>
                    <td class="small__width">Дата рождения</td>
                    <td class="small__width">E-mail</td>
                    <td class="small__width">Телефон</td>
                    <td class="small__width">Логин</td>
                    <td class="small__width">Номер Выгоды 2.0</td>
                    <td class="small__width">Роль</td>
                    <td class="small__width">Изменить привилегии</td>
                </tr>

                <?php foreach ($userList as $user): ?>
                    <tr>
                        <td class="small__width"><?php echo $user['id']; ?></td>
                        <td class="name__product"><?php echo $user['name']; ?></td>
                        <td class="small__width"><?php echo $user['surname']; ?></td>
                        <td class="small__width"><?php echo $user['birth']; ?></td>
                        <td class="small__width"><?php echo $user['email']; ?></td>
                        <td class="small__width"><?php echo $user['phone']; ?></td>
                        <td class="small__width"><?php echo $user['login']; ?></td>
                        <td class="small__width"><?php echo $user['bonus']; ?></td>
                        <td class="small__width"><?php echo $user['role']; ?></td>
                        <td class="small__width"><a href="/admin/user/update/<?php echo $user['id']; ?>"><img src="\app\template\img\admin\eqit.svg" alt="" class='panel__icon'></a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </section>
</main>