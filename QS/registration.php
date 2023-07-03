<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="CSS/registration.css">
	<style>
	.registration-form {
	max-width: 500px;
	width: 50%;
	margin: 0 auto;
	padding: 30px;
	background-color: #fff;
	border: 1px solid #ddd;
	border-radius: 5px;
	font-family: arial, sans-serif;
}

h1 {
	text-align: center;
	font-size: 2rem;
	margin-bottom: 20px;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	font-weight: bold;
	margin-bottom: 5px;
}

input[type=text],
input[type=password],
input[type=submit] {
	padding: 10px;
	margin-bottom: 10px;
	border-radius: 5px;
	border: none;
	transition: box-shadow 0.3s ease-in-out;
}

input[type=text]:hover,
input[type=password]:hover {
	box-shadow: 0 0 5px #3300FF;
}

input[type=submit] {
	background-color: #3300FF;
	color: #fff;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #3300FF;
}

p {
	margin-top: 10px;
	text-align: center;
}

a {
	color: #3300FF;
}

label[for="confirm-password"] {
	margin-top: 20px;
}

#confirm-password {
	margin-bottom: 20px;
}

#password:focus,
#confirm-password:focus {
	outline: none;
	border: 2px solid #3300FF;
}

	</style>
	
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
