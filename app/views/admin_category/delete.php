<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <div class="panel__button-return  gender__return">
        <a href="/admin/category/">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="delele__panel">
        <h1>Удалить категорию #<?php echo $id ?></h1>
        <h2>Вы действительно хотите удалить эту категорию?</h2>
        <form method="post">
            <button name="submit">Удалить</button>
        </form>
    </section>
</main>