<!DOCTYPE html>
<html>

<head>
    <title>Страхование автомобиля</title>
    <link rel="icon" href="images/logo.png">
    <!-- Подключение CSS-стилей -->
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <style>
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
    margin-bottom: 40px; /* добавлен разрыв между секциями */
    }


/* OSAGO section styles */
#osago {
    background-color: #fff;
    padding: 50px;
}

#osago h2 {
    font-size: 30px;
    margin-bottom: 20px;
}

#osago p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
}

#osago a {
    background-color: #3300FF;
    color: #fff;
    display: inline-block;
    padding: 10px 20px;
    font-size: 18px;
    text-decoration: none;
    border-radius: 5px;
}

#osago a:hover {
    background-color: #fff;
    color: #3300FF;
    border: 1px solid #3300FF;
}

/* OSAGO-info section styles */
#osago-info {
    background-color: #f5f5f5;
    padding: 50px;
}

#osago-info h2 {
    font-size: 30px;
    margin-bottom: 20px;
}

#osago-info p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
}


/* Преимущества и недостатки ОСАГО стили */
#osago-pros-cons {
    background-color: #f9f9f9;
    padding: 50px;
}

#osago-pros-cons h2 {
    font-size: 30px;
    margin-bottom: 20px;
}

#osago-pros-cons h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

#osago-pros-cons ul {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

#osago-pros-cons li {
    width: 48%;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

#osago-pros-cons .pros {
    background-color: rgba(0, 255, 0, 0.2);
}

#osago-pros-cons .cons {
    background-color: rgba(255, 0, 0, 0.2);
}

/* OSAGO-price section styles */
#osago-price {
    background-color: #f5f5f5;
    padding: 50px;
}

#osago-price h2 {
    font-size: 30px;
    margin-bottom: 20px;
}

#osago-price p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
}

/* OSAGO-form section styles */
#osago-form {
    background-color: #fff;
    padding: 50px;
}

#osago-form h2 {
    font-size: 30px;
    margin-bottom: 20px;
}

#osago-form form {
    display: flex;
    flex-direction: column;
    max-width: 500px;
    margin: 0 auto;
}

#osago-form label {
    font-size: 18px;
    margin-bottom: 10px;
}

#osago-form input[type="text"],
#osago-form input[type="email"],
#osago-form input[type="tel"] {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#osago-form #submit-btn {
    background-color: #3300FF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#osago-form #submit-btn:hover {
    background-color: #fff;
    color: #3300FF;
    border: 1px solid #3300FF;
}




    </style>
    <!-- Подключение JavaScript-файла -->
    <script src="JS/script.js"></script>
    <script src="JS/scripth.js"></script>
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
                    <a href="documents.php">Документы</a>
                    <a href="login.php" class="btn-login" id="loginBtn">Личный кабинет</a>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Блок "ОСАГО" -->
    <section id="osago">
        <h2>Обязательное страхование автогражданской ответственности (ОСАГО)</h2>
        <p>ОСАГО является обязательным видом страхования для всех автовладельцев в России. Мы предлагаем выгодные условия и быстрое оформление полиса.</p>
        <a href="#">Оформить ОСАГО</a>
    </section>

    <!-- Блок "Что такое ОСАГО" -->
    <section id="osago-info">
        <h2>Что такое ОСАГО</h2>
        <p>Обязательное страхование автогражданской ответственности (ОСАГО) – это вид страхования, который покрывает ущерб, причиненный имуществу или здоровью других людей в результате ДТП, в котором виноват владелец или водитель автомобиля. ОСАГО является обязательным для всех автовладельцев в России и предоставляет защиту от финансовых потерь в случае возмещения ущерба пострадавшим.</p>
    </section>

    <!-- Блок "Преимущества и недостатки ОСАГО" -->
<section id="osago-pros-cons">
    <h2>Преимущества и недостатки ОСАГО</h2>
    <h3>Преимущества ОСАГО:</h3>
    <ul>
        <li class="pros">Обязательность для всех автовладельцев.</li>
        <li class="pros">Покрытие ущерба пострадавшим.</li>
        <li class="pros">Быстрое оформление полиса.</li>
        <li class="pros">Выгодные условия страхования.</li>
    </ul>
</section>


    <!-- Блок "Ценовой вопрос ОСАГО" -->
    <section id="osago-price">
        <h2>Ценовой вопрос ОСАГО</h2>
        <p>Стоимость ОСАГО зависит от различных факторов, включая марку и модель автомобиля, его год выпуска, мощность двигателя, стаж вождения владельца и другие параметры. Чтобы узнать точную стоимость страховки, вы можете воспользоваться онлайн-калькулятором на нашем сайте или связаться с нашими специалистами.</p>
    </section>

    <!-- Блок "Форма заполнения ОСАГО" -->
    <section id="osago-form">
        <h2>Оформление ОСАГО</h2>
        <form>
            <label for="car-model">Марка и модель автомобиля:</label>
            <input type="text" id="car-model" name="car-model">
            <label for="car-year">Год выпуска автомобиля:</label>
            <input type="text" id="car-year" name="car-year">
            <label for="owner-name">ФИО владельца автомобиля:</label>
            <input type="text" id="owner-name" name="owner-name">
            <label for="owner-email">Email владельца автомобиля:</label>
            <input type="email" id="owner-email" name="owner-email">
            <input type="submit" value="Отправить" id="submit-btn">
        </form>
    </section>

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
                        <li><a href="#">

 <img src="images/f2.png" alt="Telegram"> <i class="fa fa-telegram"></i></a></li>
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