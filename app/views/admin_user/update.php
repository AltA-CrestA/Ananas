<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <div class="panel__button-return create__return">
        <a href="/admin/user/">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Изменить роль пользователя #<?php echo $id; ?></h1>
        <form action="#" method="post" class="create__form">
            <label>
                <p>Роль пользователя</p>
                <select name="role" class="select__down">
                    <option value="user" <?php if ($user['role'] == 'user') echo 'selected';?>>Пользователь</option>
                    <option value="admin" <?php if ($user['role'] == 'admin') echo 'selected';?>>Администратор</option>
                </select>
            </label>
            <button type="submit" name="submit" class="create__button">Изменить</button>
        </form>
    </section>
</main>