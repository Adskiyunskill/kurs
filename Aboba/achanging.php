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
$query = "SELECT * FROM user WHERE login = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
} else {
    // Не удалось найти информацию о пользователе
    header("Location: login.php");
    exit;
}

// Обработка отправленной формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tel_numb = $_POST['tel_numb'];
    $email = $_POST['email'];
    $num_strax = $_POST['num_strax'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $query = "UPDATE user SET tel_numb = ?, email = ?, num_strax = ?, first_name = ?, last_name = ? WHERE login = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssisss", $tel_numb, $email, $num_strax, $first_name, $last_name, $login);
    $stmt->execute();

    // Перенаправление на страницу профиля
    header("Location: profile.php");
    exit;
}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <title>Изменение данных</title>
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
  width: 25%;
  padding: 30px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-top: -50px;
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

.container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .wrapper {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 20px;
        margin-top: 90px;
    }

    h2 {
        font-size: 24px;
        text-align: center;
    }

    .form {
        margin-top: 20px;
    }

    .error {
        color: red;
        margin-bottom: 10px;
    }

    .success {
        color: green;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #3300FF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3300FF;
        color: #fff;
    }

    hr {
        border: none;
        height: 1px;
        background-color: #ccc;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
  <header>
    <div class="container">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="Логотип"></a>
      </div>
      <nav>
      <ul class="nav">
                <a href="admin_panel.php">В профиль</a>
                <a href="admin_insurance.php">Страховки</a>
                <a href="admin_users.php">Пользователи</a>
                <a href="logout.php">Выход</a>
                </ul>
      </nav>
    </div>
  </header>
  <h1>Пользователи</h1>
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
  <body>
  <div class="main-content">
        <div class="section">
            <h1>Изменение данных</h1>
            <div class="profile-info">
                <!-- Форма для изменения данных -->
                <form method="POST" action="">
                    <label for="tel_numb">Телефон:</label>
                    <input type="text" id="tel_numb" name="tel_numb" value="<?php echo $user['tel_numb']; ?>"><br><br>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>

                    <label for="num_strax">Номер страховки:</label>
                    <input type="text" id="num_strax" name="num_strax" value="<?php echo $user['num_strax']; ?>"><br><br>

                    <label for="first_name">Имя:</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>"><br><br>

                    <label for="last_name">Фамилия:</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>"><br><br>

                    <input type="submit" value="Сохранить изменения">
                </form>
            </div>
        </div>
    </div>
  </body>

  </html>

</html>
