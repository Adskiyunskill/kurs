<?php
// Подключение к базе данных
$db_host = '192.168.0.200:3306';
$db_user = 'stis3-40';
$db_pass = 'i3mL3!H}r';
$db_name = 'mydbs3';


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

// Здесь вы можете добавить другие поля, если они присутствуют в вашей базе данных

// Вставка данных в таблицу "пользователи"
$sql = "INSERT INTO user (login, email, password) VALUES ('$login', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Регистрация успешна!";
    header("Location: profile.php");
} else {
    echo "Ошибка при регистрации: " . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
