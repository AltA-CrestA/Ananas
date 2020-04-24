<?php include ROOT . '/app/views/layouts/header.php'; ?>

<section class="signup">
    <div class="signup-container">
        <div class="signup-title">Создание аккаунта</div>
        <form method="POST" class="signup-form" onfocus="this.className='focused'">

            <?php if (isset($errors) && is_array($errors)): ?>
                    <ul class="signup-mistakes">
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
            <?php endif; ?>

            <div class="signup-row">
                <div class="signup__string">
                    <label class="label"><strong>Ваше Имя</strong>&nbsp;:</label>
                    <input class="signup-input" type="text" name="name" value="<?php echo @$_POST['name']; ?>">
                </div>
                <div class="signup__string">
                    <label class="label"><strong>Ваша Фамилия</strong>&nbsp;:</label>
                    <input class="signup-input" type="text" name="surname" value="<?php echo @$_POST['surname']; ?>">
                </div>
            </div>
            <div class="signup-row">
                <div class="signup__string">
                    <label class="label"><strong>Дата рождения</strong>&nbsp;:</label>
                    <input class="signup-input" type="date" name="birth" value="<?php echo @$_POST['birth']; ?>">
                </div>
                <div class="signup__string">
                    <label class="label"><strong>Ваш E-mail</strong>&nbsp;:</label>
                    <input class="signup-input" type="email" name="email" value="<?php echo @$_POST['email']; ?>">
                </div>
            </div>
            <div class="signup-row">
                <div class="signup__string">
                    <label class="label" for="online_phone"><strong>Номер телефона</strong>&nbsp;:</label>
                    <input class="online_phone signup-input" name="phone" type="tel"
						value="<?php echo @$_POST['phone']; ?>"
						placeholder='+7 (___) ___ ____'>
                </div>
                <div class="signup__string">
                    <label class="label"><strong>Ваш логин</strong>&nbsp;:</label>
                    <input class="signup-input" type="text" name="login" value="<?php echo @$_POST['login']; ?>">
                </div>
            </div>
            <div class="signup-row">
                <div class="signup__string">
                    <label class="label"><strong>Ваш пароль</strong>&nbsp;:</label>
                    <input class="signup-input" type="password" name="password">
                </div>
                <div class="signup__string">
                    <label class="label"><strong>Подтвердите пароль</strong>&nbsp;:</label>
                    <input class="signup-input" type="password" name="password_2">
                </div>
            </div>
            <div class="signup-row">
                <div class="signup__string">
                    <label class="label"><strong>Номер карты Выгода 2.0</strong>&nbsp;:</label>
                    <input class="signup-input" type="text" name="bonus" value="<?php echo @$_POST['bonus']; ?>">
                </div>
            </div>
            <div class="signup-row">
                <!-- Hawk -->
                <div class="checkbox__register">
                    <label class="checkbox">
                        <input class="checkbox__input" type="checkbox" id="signup-checkbox">
                        <div class="checkbox__div"></div>
                    </label>
                    <p>Я согласен на обработку персональных данных согласно <a href="/privacy/">политике конфиденциальности</a>.</p>
                </div>
                <!-- Hawk -->
                <input class="signup__button no-neon" id="signup-botton" type="submit" name="do_signup" value="Зарегистрироваться" disabled>
            </div>
        </form>
    </div>
</section>
<script src="\app\template\js\inputForm.js"></script>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
