<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <div class="panel__button-return create__return">
        <a href="/admin/product">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Редактировать товар #<?php echo $id; ?></h1>
        <form action="#" method="post" class="create__form">
            <label>
                <p>Наименование товара</p>
                <input type="text" name="name" value="<?php echo $product['name']; ?>">
            </label>
            <label>
                <p>Категория</p>
                <select name="category_id" class="select__down">

                    <?php if ($product['gender'] == 0 and is_array($categoriesListWoman)): ?>
                            <?php foreach ($categoriesListWoman as $categoryWoman): ?>
                                <option value="<?php echo $categoryWoman['id']; ?>"
                                    <?php if ($product['category_id'] == $categoryWoman['id']) echo ' selected'; ?>>
                                    <?php echo $categoryWoman['name']; ?>
                                </option>
                            <?php endforeach; ?>
                    <?php elseif($product['gender'] == 1): ?>
                        <?php if (is_array($categoriesListMan)): ?>
                            <?php foreach ($categoriesListMan as $categoryMan): ?>
                                <option value="<?php echo $categoryMan['id']; ?>"
                                    <?php if ($product['category_id'] == $categoryMan['id']) echo ' selected'; ?>>
                                    <?php echo $categoryMan['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>
                <p>Категория для "Не знаю кто я"</p>
                <select name="category_all_id" class="select__down">

                    <?php if (is_array($categoriesListAll)): ?>
                        <?php foreach ($categoriesListAll as $categoryAll): ?>
                            <option value="<?php echo $categoryAll['id']; ?>"
                                <?php if ($product['category_all_id'] == $categoryAll['id']) echo 'selected'; ?>>
                                <?php echo $categoryAll['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
            </label>
            <label>
                <p>Изображение (Наименование файла)</p>
                <input type="text" name="image" value="<?php echo $product['image']; ?>">
            </label>
            <label>Размер
                <select name="size" class="select__down">
                    <option value="S" <?php if ($product['size'] == 'S') echo 'selected';?>>S</option>
                    <option value="S" <?php if ($product['size'] == 'S\M') echo 'selected';?>>S\M</option>
                    <option value="M" <?php if ($product['size'] == 'M') echo 'selected';?>>M</option>
                    <option value="L" <?php if ($product['size'] == 'L') echo 'selected';?>>L</option>
                </select>
            </label>
            <label>
                <p>Цвет</p>
                <input type="text" name="color" value="<?php echo $product['color']; ?>">
            </label>
            <label>
                <p>В наличии</p>
                <select name="status" class="select__down">
                    <option value="1" <?php if ($product['status'] == '1') echo 'selected';?>>Да</option>
                    <option value="0" <?php if ($product['status'] == '0') echo 'selected';?>>Нет</option>
                </select>
            </label>
            <button type="submit" name="submit" class="create__button">Изменить</button>
        </form>
    </section>
</main>