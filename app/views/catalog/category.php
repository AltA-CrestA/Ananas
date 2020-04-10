<?php include ROOT . '/app/views/layouts/header.php'; ?>

<?php include ROOT . '/app/views/layouts/filter.php'; ?>

    <div class="howthiswork">
        <div class="how__wrapper">
            <div class="how__box">
                <div class="how__item">
                    <div class="how__border">
                        <i class="fas fa-tshirt how__icon"></i>
                    </div>
                    <h2 class="how__text">Выбирайте понравившуюся<br>вам вещь</h2>
                </div>
                <div class="hom__item how__arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="how__item">
                    <div class="how__border">
                        <i class="fas fa-credit-card how__icon"></i>
                    </div>
                    <h2 class="how__text">Приобретите абонемент и носите<br>понравившиеся вещи</h2>
                </div>
                <div class="hom__item how__arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="how__item">
                    <div class="how__border">
                        <i class="fas fa-shopping-bag how__icon"></i>
                    </div>
                    <h2 class="how__text">Носите любимые вещи<br>в свое удовольствие</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="catalogall">
        <!-- тело товаров -->
        <div class="catalog">
            <div class="catalog__wrapper">
                <div class="filter__button">
                    <button type="text" id="buttonFilterMini">Фильтры и сортировка</button>
                </div>
                <div class="catalog__item">
                    <div class="catalog__products">

                        <?php foreach ($categoryProductsMen as $productItemMen): ?>
                            <div  class="catalog__box">
                                <div class="img__product">
                                    <img src="/app/template/img/catalog/<?php echo $productItemMen['image']; ?>" alt="">
                                </div>
                                <h2><?php echo $productItemMen['name']; ?></h2>
                                <p class="textforproduct">Размер: <?php echo $productItemMen['size']; ?> | Цвет: <?php echo $productItemMen['color']; ?></p>
                                <div class="product__button">
                                    <a class="btn mark">
                                        <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <?php foreach ($categoryProductsWomen as $productItemWomen): ?>
                            <div  class="catalog__box">
                                <div class="img__product">
                                    <img src="/app/template/img/catalog/<?php echo $productItemWomen['image']; ?>" alt="">
                                </div>
                                <h2><?php echo $productItemWomen['name']; ?></h2>
                                <p class="textforproduct">Размер: <?php echo $productItemWomen['size']; ?> | Цвет: <?php echo $productItemWomen['color']; ?></p>
                                <div class="product__button">
                                    <a class="btn mark">
                                        <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>