<?php include ROOT . '/app/views/layouts/header.php'; ?>

<?php include ROOT . '/app/views/layouts/filter.php'; ?>
    <!-- Модальное окно -->
    <div class="modal" id="modal">
        <div class="modal-header">
            <div class="modal__title">Example</div>
            <button class="close-button">&times;</button>
        </div>
        <div class="modal__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor tempora maiores, reprehenderit reiciendis repellendus eum aspernatur autem illum vitae veritatis necessitatibus maxime quas magni nisi, consectetur veniam inventore numquam ut quia explicabo repellat nostrum distinctio, quasi provident? Minima animi hic laudantium iste fuga blanditiis provident tenetur magni consectetur neque dolor quos nemo temporibus alias, nihil ipsum optio, at corrupti cupiditate vero, quis illo. Nam et labore aspernatur quod maxime ut at deserunt consectetur est consequatur voluptatem, alias aliquam, qui blanditiis praesentium sapiente ullam nobis dignissimos perferendis fugit natus dolorem! Repudiandae deleniti sit explicabo. Quis labore aperiam, dolor est dignissimos ipsa.
        </div>
    </div>
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
											<picture>
												<source srcset="/app/template/img/catalog_webp/<?php echo $productItemMen['image']; ?>.webp" type="image/webp">
										 		<img src="/app/template/img/catalog_jpg/<?php echo $productItemMen['image']; ?>.jpg" alt="">
											</picture>
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
										  <picture>
												<source srcset="/app/template/img/catalog_webp/<?php echo $productItemWomen['image']; ?>.webp" type="image/webp">
										 		<img src="/app/template/img/catalog_jpg/<?php echo $productItemWomen['image']; ?>.jpg" alt="">
											</picture>
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

                        <?php foreach ($categoryProductsAll as $productItemAll): ?>
                            <div  class="catalog__box">
                                <div class="img__product">
										  <picture>
												<source srcset="/app/template/img/catalog_webp/<?php echo $productItemAll['image']; ?>.webp" type="image/webp">
										 		<img src="/app/template/img/catalog_jpg/<?php echo $productItemAll['image']; ?>.jpg" alt="">
											</picture>
                                </div>
                                <h2><?php echo $productItemAll['name']; ?></h2>
                                <p class="textforproduct">Размер: <?php echo $productItemAll['size']; ?> | Цвет: <?php echo $productItemAll['color']; ?></p>
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