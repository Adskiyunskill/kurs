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
            margin-bottom: 40px;
            /* добавлен разрыв между секциями */
        }


        /* Green card section styles */
        #green-card {
            background-color: #fff;
            padding: 50px;
        }

        #green-card h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        #green-card p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        #green-card a {
            background-color: #3300FF;
            color: #fff;
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
        }

        #green-card a:hover {
            background-color: #fff;
            color: #3300FF;
            border: 1px solid #3300FF;
        }

        /* Green card info section styles */
        #green-card-info {
            background-color: #f5f5f5;
            padding: 50px;
        }

        #green-card-info a {
            background-color: #3300FF;
            color: #fff;
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
        }

        #green-card-info a:hover {
            background-color: #fff;
            color: #3300FF;
            border: 1px solid #3300FF;
        }

        #green-card-info h2 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #333333;
        }

        #green-card-info p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #666666;
        }

        #green-card-info ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #666666;
        }

        #green-card-info li {
            font-size: 16px;
            line-height: 1.5;
            color: black;
            margin-bottom: 10px;
        }

        /* Advantages and disadvantages of Green card styles */
        #green-card-pros-cons {
            background-color: #f9f9f9;
            padding: 50px;
        }

        #green-card-pros-cons h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        #green-card-pros-cons h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        #green-card-pros-cons ul {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #green-card-pros-cons li {
            width: 48%;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #green-card-pros-cons .pros {
            border: 1px solid #4CAF50;
            color: #4CAF50;
        }

        #green-card-pros-cons .cons {
            border: 1px solid #FF0000;
            color: #FF0000;
        }

        /* Footer styles */
        footer {
            background-color: #333333;
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        #osago-form {
            margin-top: 20px;
            padding: 50px;
        }

        #osago-form h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        #osago-form form {
            display: grid;
            grid-template-columns: auto;
            grid-gap: 10px;
        }

        #osago-form label {
            color: #333;
            font-size: 16px;
        }

        #osago-form input[type="text"],
        #osago-form input[type="email"],
        #osago-form input[type="date"],
        #osago-form input[type="submit"],
        #osago-form button,
        #osago-form select {
            padding: 8px;
            font-size: 16px;
        }

        #osago-form input[type="submit"],
        #osago-form button {
            background-color: #3300FF;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        #insurance-details {
            margin-top: 20px;
        }

        #insurance-details h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

        #insurance-details label {
            color: #333;
            font-size: 16px;
        }

        #insurance-details input[type="date"] {
            width: auto;
            padding: 6px;
            font-size: 16px;
        }

        #insurance-details button {
            background-color: #3300FF;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 8px 12px;
            font-size: 16px;
            margin-top: 10px;
        }

        #insurance-details p {
            color: #333;
            font-size: 16px;
            margin-top: 10px;
        }

        #insurance-details #insurance-price {
            display: none;
        }

        #insurance-details #confirmation-message {
            display: none;
        }


        footer p {
            margin: 0;
            font-size: 14px;
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
                    <a href="greencard.php" class="active">Зелённая карта</a>
                    <a href="documents.php">Документы</a>
                    <a href="login.php" class="btn-login" id="loginBtn">Личный кабинет</a>
                </ul>
            </nav>
        </div>
    </header>
    <section id="green-card">
        <h2>Зеленая карта</h2>
        <p>Зеленая карта (или международное страховое свидетельство) - это документ, который подтверждает наличие обязательной страховки ответственности владельца автомобиля за причинение вреда третьим лицам при дорожно-транспортном происшествии на территории других государств.</p>
        <p>Зеленая карта является обязательным документом при пересечении границы и вождении автомобиля за пределами страны регистрации. Она гарантирует, что в случае дорожно-транспортного происшествия, произошедшего за границей, водитель имеет достаточную страховую защиту для возмещения ущерба, причиненного третьим лицам.</p>
        <a href="green-card.html">Подробнее</a>
    </section>
    <section id="green-card-info">
        <h2>Как получить зеленую карту</h2>
        <p>Для получения зеленой карты необходимо обратиться в страховую компанию, которая осуществляет страхование автомобилей. Обычно зеленую карту можно оформить вместе с полисом ОСАГО или КАСКО.</p>
        <ul>
            <li>При оформлении зеленой карты необходимо предоставить следующие документы:
                <ul>
                    <li>Паспорт водителя</li>
                    <li>ПТС (паспорт транспортного средства)</li>
                    <li>Свидетельство о регистрации автомобиля</li>
                </ul>
            </li>
            <li>Зеленая карта выдается на определенный срок, обычно совпадающий с сроком действия страхового полиса.</li>
            <li>Получение зеленой карты платное. Стоимость может варьироваться в зависимости от страховой компании и срока действия карты.</li>
        </ul>
        <a href="green-card-info.html">Подробнее</a>
    </section>
    <section id="green-card-pros-cons">
        <h2>Преимущества и недостатки зеленой карты</h2>
        <ul>
            <li class="pros">Гарантия страховой защиты за границей</li>
            <li class="pros">Обязательный документ при пересечении границы</li>
            <li class="pros">Защита от финансовых потерь в случае дорожно-транспортного происшествия за границей</li>
            <li class="cons">Дополнительные расходы на оформление и получение</li>
            <li class="cons">Ограниченный срок действия</li>
            <li class="cons">Может потребоваться дополнительное страхование в некоторых странах</li>
        </ul>
    </section>

    <section id="osago-form">
        <h2>Оформление зеленой карты</h2>
        <form action="greencard.php" method="post" onsubmit="return processForm(event)">
            <label for="car-details">Марка и год выпуска автомобиля:</label>
            <input type="text" id="car-details" name="car-details" required>


            <input type="submit" value="Отправить" id="submit-btn">
        </form>
        <div id="insurance-details" style="display: none;">
            <h3>Выберите период страхования:</h3>
            <label for="insurance-start">С:</label>
            <input type="date" id="insurance-start" required>
            <label for="insurance-end">По:</label>
            <input type="date" id="insurance-end" required>
            <button onclick="calculatePrice()">Рассчитать стоимость страховки</button>
            <p id="insurance-price" style="display: none;"></p>
            <button onclick="continueContract()">Продолжить</button>
        </div>
    </section>

    <script>
    var formData = {};

    function processForm(event) {
        event.preventDefault();

        formData = {
            carDetails: document.getElementById('car-details').value
        };

        document.getElementById('insurance-details').style.display = 'block';
        return false;
    }

    function calculatePrice() {
        var startDate = document.getElementById('insurance-start').value;
        var endDate = document.getElementById('insurance-end').value;

        // Здесь вы можете добавить код для расчета стоимости страховки на основе выбранных дат
        var price = Math.floor(Math.random() * (6064 - 625 + 1)) + 625; // Замените это значение на реальный расчет стоимости

        document.getElementById('insurance-price').innerHTML = 'С вашими выбранными параметрами вы заплатите за страховку ' + price + ' руб.';
        document.getElementById('insurance-price').style.display = 'block';

        formData.insuranceStartDate = startDate;
        formData.insuranceEndDate = endDate;
        formData.insurancePrice = price;
    }

    function continueContract() {
        localStorage.setItem('formData', JSON.stringify(formData));
        window.location.href = 'decoration.php';
    }
    </script>

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