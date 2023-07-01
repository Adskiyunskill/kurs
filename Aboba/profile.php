<?php
// Подключение к базе данных
$db_host = '127.0.0.1:3306';
$db_user = 'root';
$db_pass = '';
$db_name = 'mydb';


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Проверка, была ли выполнена аутентификация
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Получение информации о пользователе
$login = $_SESSION['login'];
$query = "SELECT * FROM user WHERE login = '$login'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
} else {
    // Не удалось найти информацию о пользователе
    header("Location: login.php");
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Профиль</title>
    <link rel="icon" href="images/logo.png">
    <!-- Подключение CSS-стилей -->
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <style>
        /* Reset styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

section {
  padding: 60px 0;
  background-color: #f5f5f5;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  margin: 0 auto;
  max-width: 60%;
  margin-bottom: 40px;
}

/* Main section styles */
#main {
  background-color: #fff;
  padding: 50px;
  margin-top: 70px;
}

#main h1 {
  font-size: 36px;
  margin-bottom: 20px;
}

#main p {
  font-size: 18px;
  line-height: 1.5;
}

/* Profile section styles */
.profile-info {
  margin: 0 auto;
  width: 1000px;
  max-width: 70%;
  margin-top: 120px;
  margin-bottom: 40px;
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.profile-info p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 10px;
}

/* Footer styles */
footer {
  background-color: #333;
  color: #fff;
  padding: 30px;
  text-align: center;
  margin-top: 235px;
}

footer p {
  margin-bottom: 10px;
}

/* Additional styles */
.btn-login {
  background-color: #3300FF;
  color: #fff;
  display: inline-block;
  padding: 10px 20px;
  font-size: 18px;
  text-decoration: none;
  border-radius: 5px;
  margin-right: 35px;
}

.btn-login:hover {
  background-color: #fff;
  color: #3300FF;
  border: 1px solid #3300FF;
}

/* Responsive styles */
@media (max-width: 767px) {
  section {
    max-width: 90%;
  }
}

.sidebar {
  width: 30%;
  padding: 30px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-top: 120px;
  margin-right: auto;
  margin-left: 235px;
}


.sidebar h3 {
  margin-top: 0;
  margin-bottom: 30px;
}

.sidebar-nav {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-nav li {
  margin-bottom: 20px;
}

.sidebar-nav li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.sidebar-nav li a:hover {
  color: #000;
}

    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="Логотип">
                <a href="index.php"></a>
            </div>
            <nav>
                <ul class="nav">
                    <a href="index.php">Главная</a>
                    <a href="OSAGO.php">ОСАГО</a>
                    <a href="CASCO.php">КАСКО</a>
                    <a href="Express-CASCO.php">Экспресс КАСКО</a>
                    <a href="greencard.php">Зелённая карта</a>
                    <a href="login.php" class="btn-login" id="loginBtn">Личный кабинет</a>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="sidebar">
            <h3>Разделы</h3>
            <ul class="sidebar-nav">
                <li><a href="#">Настройки</a></li>
                <li><a href="changing.php">Смена данных</a></li>
                <li><a href="#">Документы</a></li>
                <a class="btn-login" href="logout.php">Выйти</a>
            </ul>
        </div>

        <div class="main-content">
            <div class="section">
                <h1>Профиль пользователя</h1>
                <div class="profile-info">
                    <p><strong>Логин:</strong> <?php echo $user['login']; ?></p>
                    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                    <p><strong>Имя:</strong> <?php echo $user['first_name']; ?></p>
                    <p><strong>Фамилия:</strong> <?php echo $user['last_name']; ?></p>
                    <!-- Другая информация о пользователе -->
                    <p><strong>Телефон:</strong> <?php echo $user['tel_numb']; ?></p>
                    <p><strong>Номер страховки:</strong> <?php echo $user['num_strax']; ?></p>

                    
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div>
            <div class="container">
                <div class="column">
                    <h3>Контакты</h3>
                    <ul class="contact-info">
                        <li><i class="fa fa-phone"></i> 8-800-555-35-35</li>
                        <li><i class="fa fa-phone"></i> +7(495)555-35-35</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a href="#"> <img src="images/f2.png" alt="Telegram"> <i class="fa fa-telegram"></i></a></li>
                        <li><a href="#"> <img src="images/f4.png" alt="whatsapp"> <i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"> <img src="images/f1.png" alt="Instagram"> <i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"> <img src="images/f3.png" alt="VK"> <i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>

                <div class="column">
                    <ul class="mini-nav">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="OSAGO.php">ОСАГО</a></li>
                        <li><a href="CASCO.php">КАСКО</a></li>
                        <li><a href="Express-CASCO.php">Экспресс каско</a></li>
                        <li><a href="documents.php">Документы</a></li>
                        <li><a href="login.php" id="loginBtn2">Личный кабинет</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="copyright">
                <p>© 2006—2023, АО «QuickSave», официальный сайт, универсальная лицензия ЦБ РФ № 2673</p>
            </div>
        </div>
    </footer>
</body>

</html>
