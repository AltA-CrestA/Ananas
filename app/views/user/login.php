<?php include ROOT . '/app/views/layouts/header.php'; ?>

<section class="login">
    <div class="login__content">
        <div class="login__content-top">
            <div class="login__content-top-title">Войти в личный кабинет</div>
            <div class="login__content-top-text">Нет личного кабинета?
                <a href="/user/register/" class="login__link">Зарегистрируйтесь</a>
            </div>
        </div>

        <?php if (isset($errors) && is_array($errors)): ?>
            <ul class="login-mistakes">
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form class="login__content-form" method="POST">
            <div class="login__content-form-item">
                <label><strong>Логин</strong>&nbsp;:</label>
                <input type="text" name="login" value="<?php echo @$_POST['login']; ?>">
            </div>
            <div class="login__content-form-item">
                <label><strong>Пароль</strong>&nbsp;:</label>
                <input type="password" name="password">
            </div>
            <div class="login__content-form-checkbox">
                <label>
                    <input type="checkbox" name="remember" value="1">
                    <div class="checkbox__div"></div>
                </label>
                <p>Запомнить меня</p>
            </div>
            <div id="active" class="login-bottom">
                <button type="submit" name="do_login">Войти</button>
            </div>
        </form>
    </div>
</section>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>
