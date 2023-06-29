<?php

// Настройки подключения к базе данных
$host = 'localhost';
$dbname = 'my_database';
$user = 'my_username';
$password = 'my_password';

// Подключение к базе данных с помощью PDO
try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Включаем режим выброса исключений при ошибках
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Включаем режим возвращения ассоциативного массива при выборке данных
    ];
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}