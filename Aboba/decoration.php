<?php
// Получение значения поля "Марка и год выпуска автомобиля"
$carDetails = $_POST['car-details'];

// Получение значения поля "Фамилия и имя владельца автомобиля"
$ownerName = $_POST['owner-name'];

// Получение значения поля "Email"
$email = $_POST['email'];

// Разделение значения марки и года автомобиля
list($carBrand, $carYear) = explode(',', $carDetails);

// Разделение значения фамилии и имени
list($lastName, $firstName) = explode(' ', $ownerName);

// Подключение к базе данных (пример на основе MySQL)
$db_host = '127.0.0.1:3306';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'mydb';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

// Сохранение данных в таблицу cars
$sqlCars = "INSERT INTO cars (marks, years_old) VALUES ('$carBrand', '$carYear')";

if ($conn->query($sqlCars) === TRUE) {
    echo "Данные автомобиля успешно сохранены.";
} else {
    echo "Ошибка при сохранении данных автомобиля: " . $conn->error;
}

// Получение ID последней добавленной записи в таблице cars
$carId = $conn->insert_id;

// Сохранение данных в таблицу users
$sqlUsers = "INSERT INTO user (email, last_name, first_name, id_cars) VALUES ('$email', '$lastName', '$firstName', '$carId')";

if ($conn->query($sqlUsers) === TRUE) {
    echo "Данные пользователя успешно сохранены.";
} else {
    echo "Ошибка при сохранении данных пользователя: " . $conn->error;
}

// Получение данных из таблицы cars
$sqlGetCars = "SELECT marks, years_old FROM cars WHERE id_car = '$carId'";
$resultCars = $conn->query($sqlGetCars);

if ($resultCars->num_rows > 0) {
    $rowCars = $resultCars->fetch_assoc();

    $carBrand = $rowCars['marks'];
    $carYear = $rowCars['years_old'];

    // Дальнейшая обработка данных из таблицы cars...
} else {
    echo "Данные автомобиля не найдены.";
}

// Получение данных из таблицы users
$sqlGetUsers = "SELECT email, last_name, first_name FROM users WHERE id_user= '$carId'";
$resultUsers = $conn->query($sqlGetUsers);

if ($resultUsers->num_rows > 0) {
    $rowUsers = $resultUsers->fetch_assoc();

    $email = $rowUsers['email'];
    $lastName = $rowUsers['last_name'];
    $firstName = $rowUsers['first_name'];

    // Дальнейшая обработка данных из таблицы users...
} else {
    echo "Данные пользователя не найдены.";
}

// Закрытие соединения с базой данных
$conn->close();

// ...
// Здесь можно добавить дальнейшую обработку данных и вывод полного заполненного договора
?>
