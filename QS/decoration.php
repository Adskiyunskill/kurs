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

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $phone = $_POST['phone'];
    $lastName = $_POST['last-name'];
    $firstName = $_POST['first-name'];
    $carMark = $_POST['car-mark'];
    $carYear = $_POST['car-year'];
    $carType = $_POST['car-type'];
    $mileage = $_POST['mileage'];
    $carHistory = $_POST['car-history'];

    // Запись данных в таблицу "user"
    $sql = "INSERT INTO user (tel_numb, first_name, last_name) VALUES ('{$phone}', '{$firstName}', '{$lastName}')";
    $conn->query($sql);
    $userId = $conn->insert_id;

    // Запись данных в таблицу "cars"
    $sql = "INSERT INTO cars (marks, years_old, user_id_user) VALUES ('{$carMark}', '{$carYear}', '{$userId}')";
    $conn->query($sql);
    $carId = $conn->insert_id;

    // Запись данных в таблицу "cars_addition"
    $sql = "INSERT INTO cars_addition (cars_id_cars, type_car, mileage, extendet_info) VALUES ('{$carId}', '{$carType}', '{$mileage}', '{$carHistory}')";
    $conn->query($sql);

    // Оформление договора
    $insuranceStartDate = date("Y-m-d");
    $insuranceEndDate = date("Y-m-d", strtotime("+1 year", strtotime($insuranceStartDate)));
    $insurancePrice = rand(625, 6064); // Замените это значение на реальный расчет стоимости

    // Запись данных в таблицу "insurance_policies"
    $sql = "INSERT INTO insurance_policies (cars_id_cars, type_policies, date_start, date_end, price, status) VALUES ('{$carId}', 'ОСАГО', '{$insuranceStartDate}', '{$insuranceEndDate}', '{$insurancePrice}', 'Off')";
    $conn->query($sql);
    $insurancePolicyId = $conn->insert_id;

    // Создание страхового случая
    $incidentDate = date("Y-m-d"); // Текущая дата
    $sql = "INSERT INTO insurance_cases (insurance_policies_id_policies, incident_date) VALUES ('{$insurancePolicyId}', '{$incidentDate}')";
    $conn->query($sql);

    $message = 'Договор успешно создан!';
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <img src="images/logo.png" alt="Логотип">
    <title>Оформление договора</title>
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;

        }

       section {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        form {
            padding: 30px;
            max-width: 900px;
            width: 50%;
            margin: 0 auto;
            text-align: left;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            font-size: 16px;
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
                    <a href="greencard.php">Зелённая карта</a>
                    <a href="documents.php">Документы</a>
                    <a href="login.php" class="btn-login" id="loginBtn">Личный кабинет</a>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <h2>Оформление договора ОСАГО</h2>
        <form action="decoration.php" method="post">
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="last-name">Фамилия владельца автомобиля:</label>
            <input type="text" id="last-name" name="last-name" required><br><br>

            <label for="first-name">Имя владельца автомобиля:</label>
            <input type="text" id="first-name" name="first-name" required><br><br>

            <label for="car-mark">Марка автомобиля:</label>
            <input type="text" id="car-mark" name="car-mark" required><br><br>

            <label for="car-year">Год выпуска автомобиля:</label>
            <input type="text" id="car-year" name="car-year" required><br><br>

            <label for="car-type">Тип автомобиля (легковая или грузовая):</label>
            <input type="text" id="car-type" name="car-type" required><br><br>

            <label for="mileage">Пробег автомобиля:</label>
            <input type="text" id="mileage" name="mileage" required><br><br>

            <label for="car-history">История автомобиля:</label>
            <textarea id="car-history" name="car-history" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Оформить">
        </form>
    </section>
    <?php if (!empty($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <!-- Футер сайта -->
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