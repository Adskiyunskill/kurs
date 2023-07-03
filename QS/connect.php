<?php

// Настройки подключения к базе данных
// Подключение к базе данных
$db_host = '192.168.0.200:3306';
$db_user = 'stis3-40';
$db_pass = 'i3mL3!H}r';
$db_name = 'mydbs3';

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
