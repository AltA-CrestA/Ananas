<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <div class="panel__button-return create__return">
        <a href="/admin/product/select">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel" class="create__panel">
        <form action="#" method="post" class="create__form">
            <label>
                <p>Наименование товара</p>
                <input type="text" name="name" placeholder="Введите наименование">
            </label>
            <label>
                <p>Категория</p>
                <select name="category_id" class='select__down'>

                    <?php if (is_array($categoriesListWoman)): ?>
                        <?php foreach ($categoriesListWoman as $categoryWoman): ?>
                            <option value="<?php echo $categoryWoman['id']; ?>">
                                <?php echo $categoryWoman['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>
                <p>Категория для "Не знаю кто я"</p>
                <select name="category_all_id" class='select__down'>

                    <?php if (is_array($categoriesListAll)): ?>
                        <?php foreach ($categoriesListAll as $categoryAll): ?>
                            <option value="<?php echo $categoryAll['id']; ?>">
                                <?php echo $categoryAll['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>
                <p>Изображение (Наименование файла)</p>
                <input type="text" name="image">
            </label>
            <label>
                <p>Размер</p>
                <select name="size" class='select__down'>
                    <option value="S">S</option>
                    <option value="M" selected>M</option>
                    <option value="L">L</option>
                </select>
            </label>
            <label>
                <p>Цвет</p>
                <input type="text" name="color">
            </label>
            <label>
                <p>В наличии</p>
                <select name="status" class='select__down'>
                    <option value="1" selected>Да</option>
                    <option value="0">Нет</option>
                </select>
            </label>
            <button type="submit" name="submit" class="create__button">Добавить товар</button>
        </form>
    </section>
</main>