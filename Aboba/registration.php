<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="CSS/registration.css">
	
</head>
<body>
	<div class="container">
		<div class="registration-form">
			<h1>Регистрация</h1>
			<form action="submit.php" method="post">
				<label for="login">Имя пользователя</label>
				<input type="text" id="login" name="login" required>

				<label for="email">E-mail</label>
				<input type="text" id="email" name="email" required>

				<label for="password">Пароль</label>
				<input type="password" id="password" name="password" required>

				<label for="confirm-password">Подтверждение пароля</label>
				<input type="password" id="confirm-password" name="confirm-password" required>

				<input type="submit" value="Зарегистрироваться">
			</form>
			<p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
		</div>
	</div>
</body>
</html>
