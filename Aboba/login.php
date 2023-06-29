<?php
session_start();

// Проверка, была ли уже выполнена аутентификация
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: profile.php");
    exit;
}

// Проверка, была ли отправлена форма входа
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Подключение к базе данных
    $db_host = '127.0.0.1:3306';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'mydb';


    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    // Получение данных из формы
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Подготовка и выполнение запроса к базе данных
    $query = "SELECT * FROM user WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($query);

    // Проверка успешности подготовки запроса
    if ($stmt) {
        $stmt->bind_param("ss", $login, $password);
        $stmt->execute();

        // Получение результата запроса
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Логин и пароль верны, установка сессии и перенаправление на страницу профиля
            $_SESSION['loggedin'] = true;
            $_SESSION['login'] = $login;
            header("Location: profile.php");
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
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Вход</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h1>Вход</h1>
            <form action="login.php" method="post">
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