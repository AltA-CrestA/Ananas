<?php include ROOT . '/app/views/layouts/header.php'; ?>

    <main class="marker">
        <div class="catalog__wrapper">
            <div class="marker__title">
                <h1>Мои закладки</h1>
            </div>

            <?php if ($productsInLike): ?>
                <?php foreach ($products as $product): ?>
                <div class="catalog__item">
                    <div class="catalog__products">
                        <div  class="catalog__box">
                            <div class="img__product">
                                <img src="/app/template/img/catalog/<?php echo $product['img']; ?>" alt="">
                            </div>
                            <h3><?php echo $product['name']; ?></h3>
                            <p class="textforproduct">Размер: <?php echo $product['size']; ?> | Цвет: <?php echo $product['color']; ?></p>
                            <?php echo $productsInLike[$product['id']]; ?>
                            <div class="product__button1">
                                <a class="mark btn__delite"><i class="fas fa-star"></i><span class="button__text"> В закладках</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            <?php else: ?>
                <div class="marker__title">
                    <h2>У вас нет закладок :(</h2>   <!-- Для случая, когда нет заладок -->
                </div>
            <?php endif; ?>
        </div>
    </main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>