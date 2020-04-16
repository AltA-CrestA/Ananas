<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <h1>Редактировать товар #<?php echo $id; ?></h1>
        <form action="#" method="post">
            <label>Наименование товара
                <input type="text" name="name" value="<?php echo $product['name']; ?>">
            </label>
            <label>Категория
                <select name="category_id">

                    <?php if ($product['gender'] == 0): ?>
                        <?php if (is_array($categoriesListWoman)): ?>
                            <?php foreach ($categoriesListWoman as $categoryWoman): ?>
                                <option value="<?php echo $categoryWoman['id']; ?>
                                    <?php if ($product['category_id'] == $categoryWoman['id']) echo 'selected'; ?>">
                                    <?php echo $categoryWoman['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if (is_array($categoriesListMan)): ?>
                            <?php foreach ($categoriesListMan as $categoryMan): ?>
                                <option value="<?php echo $categoryMan['id']; ?>
                                    <?php if ($product['category_id'] == $categoryMan['id']) echo 'selected'; ?>">
                                    <?php echo $categoryMan['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>Категория для "Не знаю кто я"
                <select name="category_all_id">

                    <?php if (is_array($categoriesListAll)): ?>
                        <?php foreach ($categoriesListAll as $categoryAll): ?>
                            <option value="<?php echo $categoryAll['id']; ?>
                                <?php if ($product['category_all_id'] == $categoryAll['id']) echo 'selected'; ?>">
                                <?php echo $categoryAll['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>Изображение (Наименование файла)
                <input type="text" name="image" value="<?php echo $product['image']; ?>">
            </label>
            <label>Размер
                <select name="size">
                    <option value="S" <?php if ($product['size'] == 'S') echo 'selected';?>>S</option>
                    <option value="S" <?php if ($product['size'] == 'S\M') echo 'selected';?>>S\M</option>
                    <option value="M" <?php if ($product['size'] == 'M') echo 'selected';?>>M</option>
                    <option value="L" <?php if ($product['size'] == 'L') echo 'selected';?>>L</option>
                </select>
            </label>
            <label>Цвет
                <input type="text" name="color" value="<?php echo $product['color']; ?>">
            </label>
            <label>В наличии
                <select name="status">
                    <option value="1" <?php if ($product['status'] == '1') echo 'selected';?>>Да</option>
                    <option value="0" <?php if ($product['status'] == '0') echo 'selected';?>>Нет</option>
                </select>
            </label>
            <button type="submit" name="submit">Изменить</button>
        </form>
    </section>
</main>