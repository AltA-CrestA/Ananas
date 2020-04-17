<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main class="admin__creating">
    <div class="panel__button-return">
        <a href="/admin/product/select">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-panel create__panel">
        <h1>Добавить новый товар &#128120</h1>
        <form action="#" method="post" class="create__form">
            <!-- Наименование -->
            <label><p>Наименование товара</p></label>
            <input type="text" name="name" placeholder="Введите наименование">
            <!-- Категория -->
            <label><p>Категория</p></label>
            <div class="select">
                <select name="category_id" class="option__create">
                    <option selected disabled>Выбирете категорию</option>
                    <?php if (is_array($categoriesListWoman)): ?>
                        <?php foreach ($categoriesListWoman as $categoryWoman): ?>
                            <option value="<?php echo $categoryWoman['id']; ?>">
                                <?php echo $categoryWoman['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <!-- Категория не знаю хто я -->
            <label><p>Категория для "Не знаю кто я"</p></label>
            <div class="select">
                <select name="category_all_id" class="option__create">
                    <option selected disabled>Выбирете категорию</option>
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
                    <option selected disabled>Выбирете размер</option>
                    <option value="S">S</option>
                    <option value="S\M">S\M</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>
            <!-- Цвет -->
            <label><p>Цвет</p></label>
            <input type="text" name="color" placeholder="Введите цвет">
            <!-- Наличие -->
            <label><p>В наличии</p></label>   
            <div class="select">
                <select name="status" class="option__create">
                    <option selected disabled><p>Выбирете наличие</p></option>
                    <option value="1">Да</option>
                    <option value="0">Нет</option>
                </select>
            </div>
            <button type="submit" name="submit" class="create__button">Добавить товар</button>
        </form>
    </section>
</main>