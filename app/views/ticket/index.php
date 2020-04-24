<?php use App\models\User;

include ROOT . '/app/views/layouts/header.php'; ?>

    <main class="season-ticket">

        <?php foreach ($latestTickets as $ticketItem): ?>
            <section class="st-item" id="<?php echo $ticketItem['id']; ?>">
                <div class="st-col1">
                    <div class="st__title"><?php echo $ticketItem['name']; ?></div>
                    <div class="st__text"><?php echo $ticketItem['description']; ?></div>
                    <div class="st__icon">
                        <div class="st__icon-box">
                            <img class="st__icons" src="/app/template/img/ticket/calender-schedule-time-management-control-day_83408.svg" alt="">
                            <h2><?php echo $ticketItem['duration']?> мес.</h2>
                        </div>
                        <div class="st__icon-box">
                            <img class="st__icons" src="/app/template/img/ticket/clock_icon-icons.com_54407.svg" alt="">
                            <h2>Ежемесячно</h2>
                        </div>
                        <div class="st__icon-box">
                            <img class="st__icons" src="/app/template/img/ticket/clothes.svg" alt="">
                            <h2><?php echo $ticketItem['item']?> вещи</h2>
                        </div>
                    </div>
                </div>
                <div class="st-col2">
                    <div class="st__price"><?php echo $ticketItem['price']; ?> ₽</div>

                    <?php if (!User::isGuest()): ?>
                        <a href="#" data-id="<?php echo $ticketItem['id']; ?>" class="st__button add-to-cart">Купить</a>
                    <?php else: ?>
                        <a href="/user/login/" class="st__button">Купить</a>
                    <?php endif; ?>

                </div>

            </section>
        <?php endforeach; ?>

    </main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>