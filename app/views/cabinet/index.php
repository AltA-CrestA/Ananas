<?php include ROOT . '/app/views/layouts/header.php'; ?>

<main class="cabinet">
    <section class="personal">
        <div class="personal-title title__page">Персональные данные</div>
        <div class="personal-inputs">
            <input type="text" placeholder="<?php echo $user['name'] ?>" disabled>
            <input type="text" placeholder="<?php echo $user['surname'] ?>" disabled>
            <input type="text" placeholder="<?php echo $user['login'] ?>" disabled>
        </div>
        <div class="personal-button button__page">
            <a href="/cabinet/edit/" class="personal-button__link">Редактировать</a>
<!--            <a href="#" class="personal-button__link">Изменить пароль</a>-->
        </div>
    </section>
    <section class="ticket">
        <div class="ticket-title title__page">Действующий абонемент</div>
        <div class="ticket-info">
            <div class="ticket__not">
                <i class="far fa-times-circle ticket__icon fa-spin"></i>
                <p>У вас нет абонемента :(</p>
            </div>
            <!-- <div class="ticket-info__title">Абонемент <span>Gold</span></div>
            <div class="ticket-info__text">действует до</div>
            <div class="ticket-info__date">01.04.2020</div>
            <div class="ticket-info__next">Следующий Sharing <span>12.12.2020</span></div> -->
        </div>
        <div class="ticket-button button__page">
            <!-- <a href="season-ticket.php" class="ticket-button__link">Посмотреть все</a> -->
            <div class="ticket__not">
                <a href="season-ticket.php" class="ticket-button__link">Приобрести</a>
            </div>
        </div>
    </section>
    <section class="goodies">
        <div class="goodies-title title__page">Ништяки</div>
        <div class="goodies-text">При использовании приложения «Выгода 2.0» вам будут начисляться бонусные балы, которые являются своеобразной валютой, за которые в дальнейшем вы можете приобрести в нашем магазине множество чудесных подарков!</div>
        <div class="goodies-button button__page">
            <a href="" class="goodies-button__link">Подробнее</a>
        </div>
    </section>
    <section class="favorite">
        <div class="favorite-title title__page">Закладки</div>
        <!-- <div class="favorite-items">
            <div class="favorite-items__item">
                <img src="/img/товары/IMG_7873 копия (1).jpg" alt="">
                <span>Шорты</span>
            </div>
            <div class="favorite-items__item">
                <img src="/img/товары/IMG_7873 копия (1).jpg" alt="">
                <span>Шорты</span>
            </div>
        </div> -->
        <div class="favorite__not">
            <i class="far fa-sad-tear favorite__icon"></i>
            <p>У вас нет закладок</p>
        </div>
        <div class="favorite-button button__page">
            <a href="/favorite/" class="favorite-button__link">Подробнее</a>
        </div>
    </section>
</main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>
