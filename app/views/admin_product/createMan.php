<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__creating">
    <div class="panel__button-return create__return">
        <a href="/admin/product/select/">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Добавить новый товар</h1>
        <form action="#" method="post" class="create__form">
            <!-- Наименование -->
            <label><p>Наименование товара</p></label>
            <input type="text" name="name" placeholder="Введите наименование">
            <!-- Категория -->
            <label><p>Категория</p></label>
            <div class="select">
                <select name="category_id" class="option__create">
                    <?php if (is_array($categoriesListMan)): ?>
                        <?php foreach ($categoriesListMan as $categoryMan): ?>
                            <option value="<?php echo $categoryMan['id']; ?>">
                                <?php echo $categoryMan['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <!-- Категория не знаю хто я -->
            <label><p>Категория для "Не знаю кто я"</p></label>
            <div class="select">
                <select name="category_all_id" class="option__create">
                    <?php if (is_array($categoriesListAll)): ?>
                        <?php foreach ($categoriesListAll as $categoryAll): ?>
                            <option value="<?php echo $categoryAll['id']; ?>">
                                <?php echo $categoryAll['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <!-- Изображение -->
            <label><p>Изображение (Наименование файла)</p></label>
            <input type="text" name="image">
            <!-- Размер -->
            <label><p>Размер</p></label>
            <div class="select">
                <select name="size" class="option__create">
                    <option value="S">S</option>
                    <option value="S\M">S\M</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>
            <!-- Цвет -->
            <label><p>Цвет</p></label>
            <input type="text" name="color">
            <!-- Наличие -->
            <label><p>В наличии</p></label>
            <div class="select">
                <select name="status" class="option__create">
                    <option value="1">Да</option>
                    <option value="0">Нет</option>
                </select>
            </div>
            <button type="submit" name="submit" class="create__button">Добавить товар</button>
        </form>
    </section>
</main>