<?php include ROOT . '/app/views/layouts/header.php'; ?>

<section class="login-content">
    <div class="login-container">
        <div class="login-top">
            <div class="login-title">Войти в личный кабинет</div>
            <div class="login-text">Нет личного кабинета?
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

        <form class="login-form" method="POST">
            <div class="login__string">
                <label class="label-login"><strong>Логин</strong>&nbsp;:</label>
                <input class="login__input" type="text" name="login" value="<?php echo @$_POST['login']; ?>">
            </div>
            <div class="login__string">
                <label class="label-login"><strong>Пароль</strong>&nbsp;:</label>
                <input class="login__input" type="password" name="password">
				</div>
				<div class="login__string">
					<input class="login__input" type="checkbox" name="remember" value="1">
                <label class="label-login"><strong>Запомнить меня</strong></label>
            </div>
            <div class="login-bottom">
                <button class="button__login" type="submit" name="do_login">Войти</button>
            </div>
        </form>
    </div>
</section>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>
