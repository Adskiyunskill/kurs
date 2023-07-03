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
  margin-top: 500px;
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
  margin-right: 20px;
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
  margin-top: 51px;
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

.delete-link {
  color: red;
  cursor: pointer;
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
                <a href="admin_panel.php">В профиль</a>
                <a href="admin_insurance.php">Страховки</a>
                <a href="admin_users.php">Пользователи</a>
                <a href="logout.php">Выход</a>
                </ul>
            </nav>
        </div>
    </header>
<body>
    <h1>Страховки</h1>

    <table>
        <tbody>
            <?php
// Подключение к базе данных
$db_host = '192.168.0.200:3306';
$db_user = 'stis3-40';
$db_pass = 'i3mL3!H}r';
$db_name = 'mydbs3';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Проверка, если отправлена форма редактирования
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $carId = $_POST['carId'];
        $type = $_POST['type'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $price = $_POST['price'];
        $status = $_POST['status'];

        // Выполнение запроса на обновление данных страховки
        $updateSql = "UPDATE insurance_policies SET cars_id_cars='$carId', type_policies='$type', date_start='$startDate', date_end='$endDate', price='$price', status='$status' WHERE id_Insurance_policies='$id'";
        $updateResult = $conn->query($updateSql);

        if ($updateResult) {
            echo "Данные страховки успешно обновлены.";
        } else {
            echo "Ошибка при обновлении данных страховки: " . $conn->error;
        }
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];

        // Выполнение запроса на удаление страховки
        $deleteSql = "DELETE FROM insurance_policies WHERE id_Insurance_policies='$id'";
        $deleteResult = $conn->query($deleteSql);

        if ($deleteResult) {
            echo "Страховка успешно удалена.";
        } else {
            echo "Ошибка при удалении страховки: " . $conn->error;
        }
    }
}

// Выборка всех страховых случаев из базы данных
$sql = "SELECT * FROM insurance_policies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод данных каждого страхового случая с формой редактирования и удаления
    echo "<table>";
    echo "<tr>";
    echo "<th>Идентификатор</th>";
    echo "<th>Идентификатор автомобиля</th>";
    echo "<th>Тип страховки</th>";
    echo "<th>Дата начала</th>";
    echo "<th>Дата окончания</th>";
    echo "<th>Цена</th>";
    echo "<th>Статус</th>";
    echo "<th>Действия</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<form method='post' action='admin_insurance.php'>";
        echo "<td>" . $row['id_Insurance_policies'] . "</td>";
        echo "<td><input type='text' name='carId' value='" . $row['cars_id_cars'] . "'></td>";
        echo "<td><input type='text' name='type' value='" . $row['type_policies'] . "'></td>";
        echo "<td><input type='text' name='startDate' value='" . $row['date_start'] . "'></td>";
        echo "<td><input type='text' name='endDate' value='" . $row['date_end'] . "'></td>";
        echo "<td><input type='text' name='price' value='" . $row['price'] . "'></td>";
        echo "<td><input type='text' name='status' value='" . $row['status'] . "'></td>";
        echo "<input type='hidden' name='id' value='" . $row['id_Insurance_policies'] . "'>";
        echo "<td><button type='submit' name='edit'>Сохранить</button> | <button type='submit' name='delete'>Удалить</button></td>";
        echo "</form>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Нет доступных страховых случаев.</p>";
}

// Закрытие подключения к базе данных
$conn->close();
?>

        </tbody>
    </table>
    
</body>

</html>
