<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <section class="admin-panel">
        <h2>Удалитьтовар #<?php echo $id ?></h2>
        <h4>Вы действительно хотите удалить этот товар?</h4>
        <form method="post">
            <button name="submit">Удалить</button>
        </form>
    </section>
</main>