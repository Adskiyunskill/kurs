<?php
session_start();

// Проверка, была ли уже выполнена аутентификация
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if ($_SESSION['login'] === "admin") {
        // Пользователь администратор, перенаправление на администраторскую панель
        header("Location: admin_panel.php");
        exit;
    } else {
        // Пользователь не администратор, перенаправление на профиль
        header("Location: profile.php");
        exit;
    }
}

// Проверка, была ли отправлена форма входа
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Подключение к базе данных
    $db_host = '127.0.0.1:3306';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'mydbs2';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    // Получение данных из формы
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Проверка логина и пароля в базе данных
    $query = "SELECT * FROM user WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($query);

    // Проверка успешности подготовки запроса
    if ($stmt) {
        $stmt->bind_param("ss", $login, $password);
        $stmt->execute();

        // Получение результата запроса
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Логин и пароль верны, установка сессии и перенаправление на страницу профиля или администраторскую панель
            $row = $result->fetch_assoc();
            $_SESSION['loggedin'] = true;
            $_SESSION['login'] = $login;
            if ($login === "admin") {
                header("Location: admin_panel.php");
            } else {
                header("Location: profile.php");
            }
            exit;
        } else {
            // Неправильные логин или пароль, перенаправление на страницу входа с сообщением об ошибке
            header("Location: login.php?error=1");
            exit;
        }
    } else {
        // Обработка ошибки при подготовке запроса
        die("Ошибка при подготовке запроса: " . $conn->error);
    }

    $stmt->close();
    $conn->close();
}

// Обработка ошибки при входе
$error = isset($_GET['error']) ? $_GET['error'] : 0;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Вход</title>
    <link rel="icon" href="images/logo.png">
    <style>
    .login-form {
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
        <div class="login-form">
            <?php if ($error == 1) { ?>
                <p class="error">Неправильный логин или пароль</p>
            <?php } ?>
            <form action="login.php" method="post">
                <h1>Вход</h1>
                <label for="login">Логин</label>
                <input type="text" id="login" name="login" required>
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Войти">
            </form>
            <p>Нет аккаунта? <a href="registration.php">Зарегистрироваться</a></p>
        </div>
    </div>
</body>

</html>