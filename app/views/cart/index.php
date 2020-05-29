<?php include ROOT . '/app/views/layouts/header.php'; ?>

    <main class="cart__box">
        <div class="title__cart">
            <h1>Ваша корзина</h1>
        </div>

        <?php if ($ticketsInCart): ?>
            <div class="contetnt__cart">
                <div class="cart__up-main">
                    <div class="up__name">
                        <div class="up__title big__title">Наименование</div>
                        <div class="small__title up__title">Наим.</div>
                    </div>
                    <div class="up__amount">
                        <div class="up__title title__amount">Кол-во</div>
                    </div>
                    <div class="up__сost">
                        <div class="up__title">Цена</div>
                    </div>
                </div>

                <?php foreach ($tickets as $ticket): ?>
                    <div class="cart__up">
                        <div class="up__name">
                            <div class="up__text"><?php echo $ticket['name']; ?></div>
                        </div>
                        <div class="up__amount">
                            <div class="inpute__amount">
                                <div id="res1"><?php echo $ticketsInCart[$ticket['id']]; ?></div>
                                <input type="number" id="num1" min="0" class="uk-form-small" name="quantity" value="0">
                            </div>
                        </div>
                        <div class="up__сost">
                            <div class="up__text">
                                <p><?php echo $ticket['price'] ; ?> руб.</p>
                                <div><a href="/cart/delete/<?php echo $ticket['id']?>"><img src="/app/template/img/cross.png" class="up__text-deite" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="cart__down">
                    <div class="down__total">Стоимость</div>
                    <div class="down__cost"><?php echo $totalPrice; ?> рублей</div>
                </div>
            </div>
            <button id="order" type="button">Оформить заказ</button>

        <?php else: ?>
            <div class="cart-empty">Корзина пуста</div>
        <?php endif; ?>

    </main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>