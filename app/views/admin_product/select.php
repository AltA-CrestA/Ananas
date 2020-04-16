<?php include ROOT . '/app/views/layouts/header_admin.php'; ?>

<main>
    <div class="panel__button-return  gender__return">
        <a href="/admin/product">
            <img src="\app\template\img\admin\return1.svg" alt="">
            <p>Назад</p>
        </a>
    </div>
    <section class="admin-select">
        <div class="admin-select__title">Выберите пол для которого вы хотите добавить товар</div>
        <div class="admin-select__gender">
            <div class="gender__men">
                <a href="/admin/product/createMan">
                    <img src="\app\template\img\admin\man.svg" alt="">
                    <p>Мужской</p> 
                </a>
            </div>
            <div class="gender__men">
                <a href="/admin/product/createWoman">
                    <img src="\app\template\img\admin\woman.svg" alt="">
                    <p>Женский</p> 
                </a>
            </div>
        </div>
    </section>
</main>