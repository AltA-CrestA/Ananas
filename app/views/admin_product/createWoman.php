<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <h1>Добавить новый товар</h1>
        <form action="#" method="post">
            <label>Наименование товара
                <input type="text" name="name">
            </label>
            <label>Пол
                <select name="gender" disabled>
                    <option value="1">Мужской</option>
                    <option value="0" selected>Женский</option>
                </select>
            </label>
            <label>Категория
                <select name="category_id">

                    <?php if (is_array($categoriesListWoman)): ?>
                        <?php foreach ($categoriesListWoman as $categoryWoman): ?>
                            <option value="<?php echo $categoryWoman['id']; ?>">
                                <?php echo $categoryWoman['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>Категория для "Не знаю кто я"
                <select name="category_all_id">

                    <?php if (is_array($categoriesListAll)): ?>
                        <?php foreach ($categoriesListAll as $categoryAll): ?>
                            <option value="<?php echo $categoryAll['id']; ?>">
                                <?php echo $categoryAll['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>Изображение (Наименование файла)
                <input type="text" name="image">
            </label>
            <label>Размер
                <select name="size">
                    <option value="S">S</option>
                    <option value="M" selected>M</option>
                    <option value="L">L</option>
                </select>
            </label>
            <label>Цвет
                <input type="text" name="color">
            </label>
            <label>В наличии
                <select name="status">
                    <option value="1" selected>Да</option>
                    <option value="0">Нет</option>
                </select>
            </label>
            <button type="submit" name="submit">Добавить товар</button>
        </form>
    </section>
</main>