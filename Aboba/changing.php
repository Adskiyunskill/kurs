<?php
session_start();

// Подключение к базе данных
$db_host = '127.0.0.1:3306';
$db_user = 'root';
$db_pass = '';
$db_name = 'mydb';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Проверка авторизации пользователя и получение его данных из сессии или базы данных
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Обработка формы изменения логина
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $newLogin = $_POST['new_login'];
    $userId = $_SESSION['id_user'];

    try {
        // Обновление логина в базе данных
        $updateLoginStmt = $conn->prepare("UPDATE user SET login = ? WHERE id_user = ?");
        $updateLoginStmt->bind_param('si', $newLogin, $userId);
        $updateLoginStmt->execute();

        // Перенаправление на страницу профиля после успешного изменения
        header('Location: profile.php');
        exit;
    } catch (Exception $e) {
        die("Ошибка при обновлении логина: " . $e->getMessage());
    }
}

// Обработка формы изменения пароля
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    $userId = $_SESSION['id_user'];

    // Проверка старого пароля
    $checkPasswordStmt = $conn->prepare("SELECT password FROM user WHERE id_user = ?");
    $checkPasswordStmt->bind_param('i', $userId);
    $checkPasswordStmt->execute();
    $checkPasswordStmt->store_result();

    if ($checkPasswordStmt->num_rows === 1) {
        $checkPasswordStmt->bind_result($dbPassword);
        $checkPasswordStmt->fetch();

        if ($dbPassword === $oldPassword) {
            // Старый пароль совпадает, обновляем пароль в базе данных
            $updatePasswordStmt = $conn->prepare("UPDATE user SET password = ? WHERE id_user = ?");
            $updatePasswordStmt->bind_param('si', $newPassword, $userId);
            $updatePasswordStmt->execute();

            // Перенаправление на страницу профиля после успешного изменения
            header('Location: profile.php');
            exit;
        } else {
            die("Неправильный старый пароль");
        }
    } else {
        die("Ошибка при проверке старого пароля");
    }
}

// Остальные разделы изменений аналогично обрабатываются и проверяются

?>










<!DOCTYPE html>
<html>
<head>
    <title>Изменение данных</title>
    <link rel="icon" href="images/logo.png">
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
  width: 900px;
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

.container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3300FF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2200CC;
        }

        p.error-message {
            color: red;
        }

    </style>
</head>
<body>
    <h2>Изменение данных</h2>
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
                    <a href="greencard.php">Зелённая карта</a>
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

        <div class="container">
        

        

        
    </div>

    <div class="main-content">
        <div class="section">
            <h1>Профиль пользователя</h1>
            <div class="profile-info">
            <div class="section">
            <h2>Изменение данных</h2>
            <!-- Раздел изменения логина -->
            <h3>Изменение логина</h3>
            <form action="changing.php" method="post">
                <label for="old_login">Старый логин:</label>
                <input type="text" id="old_login" name="old_login" required>

                <label for="new_login">Новый логин:</label>
                <input type="text" id="new_login" name="new_login" required>

                <input type="submit" name="login" value="Изменить логин">
            </form>
            <?php if (isset($loginError)) : ?>
                <p class="error-message"><?php echo $loginError; ?></p>
            <?php endif; ?>
            </div>
            <div class="section">
            <!-- Раздел изменения пароля -->
            <h3>Изменение пароля</h3>
            <form action="changing.php" method="post">
                <label for="old_password">Старый пароль:</label>
                <input type="password" id="old_password" name="old_password" required>

                <label for="new_password">Новый пароль:</label>
                <input type="password" id="new_password" name="new_password" required>

                <input type="submit" name="password" value="Изменить пароль">
            </form>
            <?php if (isset($passwordError)) : ?>
                <p class="error-message"><?php echo $passwordError; ?></p>
            <?php endif; ?>
        </div>
            <a class="btn-login" href="profile.php">В профиль</a>
            </div>
           
        </div>
        
    </div>
     
       

<!-- Остальные разделы изменений аналогичны -->

</body>
</html>
