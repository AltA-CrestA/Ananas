<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__creating">
    <div class="panel__button-return create__return">
        <a href="/admin/category/">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Редактировать категорию #<?php echo $id; ?></h1>
        <form action="#" method="post" class="create__form">
            <label><p>Наименование категории</p></label>
            <input type="text" name="name" value="<?php echo $category['name']; ?>">
            <label><p>Пол для категории</p></label>
            <div class="select">
                <select name="gender" class="option__create">
                    <option value="0" <?php if ($category['gender'] == '0') echo 'selected';?>>Женский</option>
                    <option value="1" <?php if ($category['gender'] == '1') echo 'selected';?>>Мужской</option>
                    <option value="2" <?php if ($category['gender'] == '2') echo 'selected';?>>Не знаю кто я</option>
                </select>
            </div>
            <label><p>Номер по порядку сортировки</p></label>
            <input type="number" name="sort_order" value="<?php echo $category['sort_order']; ?>">
            <label><p>Статус</p></label>
            <div class="select">
                <select name="status" class='option__create'>
                    <option value="1" <?php if ($category['status'] == '1') echo 'selected';?>>Отображается</option>
                    <option value="0" <?php if ($category['status'] == '0') echo 'selected';?>>Не отображается</option>
                </select>
            </div>
            <button type="submit" name="submit" class="create__button">Изменить</button>
        </form>
    </section>
</main>