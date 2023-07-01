<?php
// Проверка, была ли выполнена аутентификация
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Подключение к базе данных
$db_host = '127.0.0.1:3306';
$db_user = 'root';
$db_pass = '';
$db_name = 'mydb';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение всех пользователей
$query = "SELECT * FROM user";
$result = $conn->query($query);
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
  max-width: 100%;
  margin-bottom: 40px;
}

/* Main section styles */
#main {
  background-color: #fff;
  padding: 50px;
  margin-top: 165px;
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
  width: auto;
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
    max-width: 100%;
  }
}

.sidebar {
  padding: 30px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-top: 120px;
  margin-right: auto;
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

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 8px;
  border: 1px solid #ccc;
}

table th {
  background-color: #f0f0f0;
  font-weight: bold;
  text-align: left;
}

table tr:nth-child(even) {
  background-color: #f9f9f9;
}

table tr:hover {
  background-color: #e0e0e0;
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
                <a href="admin_profile.php">Главная</a>
                <a href="admin_insurance.php">Страховки</a><
                <a href="admin_users.php">Пользователи</a>
                <a href="logout.php">Выход</a>
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

        <section id="main">
        <h1>Пользователи</h1>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Login</th><th>Password</th><th>Tel_numb</th><th>Email</th><th>Num_strax</th><th>First_name</th><th>Last_name</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['login'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['tel_numb'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['num_strax'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Нет доступных пользователей";
        }
        ?>
        </section>
       
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
