<?php include ROOT . '/app/views/layouts/header.php'; ?>

<section class="signup">
    <div class="signup-container">
        <div class="signup-title">Создание аккаунта</div>
        <form method="POST" class="signup-form">

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
                    <label class="label"><strong>Номер телефона</strong>&nbsp;:</label>
                    <input type="tel" name="phone" class="masked-phone signup-input" value="<?php echo @$_POST['phone']; ?>">
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
                <div class="signup__checkbox">
                    <input type="checkbox" id="signup-checkbox">
                    <label>Я согласен на обработку персональных данных согласно политике конфиденциальности.</label>
                </div>
                <input class="signup__button no-neon" id="signup-botton" type="submit" name="do_signup" value="Зарегистрироваться" disabled>
            </div>
        </form>
    </div>
</section>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>
