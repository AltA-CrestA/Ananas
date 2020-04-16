<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <h1>Удалить товар #<?php echo $id ?></h1>
        <h2>Вы действительно хотите удалить этот товар?</h2>
        <form method="post">
            <button name="submit">Удалить</button>
        </form>
    </section>
</main>