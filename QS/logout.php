<?php
// Инициируем сеанс сеанса
session_start();

// Удаляем все переменные сессии
session_unset();

// Уничтожаем сессию
session_destroy();

// Перенаправляем пользователя на страницу входа или на другую страницу по вашему выбору
header("Location: index.php");
exit();
?>
