<?php include ROOT . '/app/views/layouts/header.php'; ?>

<main>
		<div class="edit-wrapper">
			<section class="edit">
				<div class="edit-title">Редактировать персональные данные</div>

				<?php if (isset($errors) && is_array($errors)): ?>
					<ul class="signup-mistakes">
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

				<form action="" method="POST" class="edit-inputs">
					<div class="edit-inputs__input">
						<label for="firstname">Ваше Имя</label>
						<input type="text" name="name" value="<?php echo $user['name']; ?>">
					</div>
					<div class="edit-inputs__input">
						<label for="lastname">Ваша Фамилия</label>
						<input type="text" name="surname" value="<?php echo $user['surname']; ?>">
					</div>
					<div class="edit-inputs__input">
						<label for="date">Дата рождения</label>
						<input type="date" name="birth" value="<?php echo $user['birth']; ?>">
					</div>
					<div class="edit-inputs__input">
						<label for="email">Ваш E-mail</label>
						<input type="email" name="email" value="<?php echo $user['email']; ?>">
					</div>
					<div class="edit-inputs__input">
						<label for="tel">Номер телефона</label>
						<input class="online_phone signup-input" name="phone" type="tel"
						value="<?php echo $user['phone']; ?>"
						placeholder="+7(___)___-__-__">
					</div>
					<div class="edit-inputs__input">
						<label for="login">Ваш логин</label>
						<input type="text" name="login" value="<?php echo $user['login']; ?>">
					</div>
                    <div class="edit-inputs__input">
                        <label for="login">Ваш пароль</label>
                        <input type="text" name="password">
                    </div>
                    <div class="edit-inputs__input">
                        <label for="login">Повторите пароль</label>
                        <input type="text" name="password_2">
                    </div>
					<div class="edit-buttons">
						<button type="submit" name="do_edit" class="edit-buttons__link">Редактировать данные</button>
					</div>
				</form>
			</section>
		</div>
	</main>
<script src="\app\template\js\inputForm.js"></script>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>