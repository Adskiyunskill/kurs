<!DOCTYPE html>
<html>
<head>
    <title>Страхование автомобиля КАСКО</title>
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


        /* CASCO section styles */
        #casco {
            background-color: #fff;
            padding: 50px;
        }

        #casco h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        #casco p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        #casco a {
            background-color: #3300FF;
            color: #fff;
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
        }

        #casco a:hover {
            background-color: #fff;
            color: #3300FF;
            border: 1px solid #3300FF;
        }

        /* CASCO-info section styles */
        #casco-info {
            background-color: #f5f5f5;
            padding: 50px;
        }

        #casco-info h2 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #333333;
        }

        #casco-info p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #666666;
        }

        #casco-info ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #666666;
        }

        #casco-info li {
            font-size: 16px;
            line-height: 1.5;
            color: black;
            margin-bottom: 10px;
        }

        /* Преимущества и недостатки КАСКО стили */
        #casco-pros-cons {
            background-color: #f9f9f9;
            padding: 50px;
        }

        #casco-pros-cons h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        #casco-pros-cons h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        #casco-pros-cons ul {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #casco-pros-cons li {
            width: 48%;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #casco-pros-cons li:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #casco-pros-cons .pros {
            background-color: #00cc00;
            color: #ffffff;
        }

        #casco-pros-cons .cons {
            background-color: #ff3300;
            color: #ffffff;
        }

        #casco-pros-cons .pros::before {
            content: "+";
            margin-right: 5px;
        }

        #casco-pros-cons .cons::before {
            content: "-";
            margin-right: 5px;
        }

        /* Стили для блока "Экспресс КАСКО" */
        #express-casco {
            background-color: #fff;
            padding: 50px;
        }

        #express-casco h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        #express-casco p {
            color: #666;
            font-size: 16px;
        }

        /* Стили для блока "Сравнение обычного КАСКО и Экспресс КАСКО" */
        #casco-comparison {
            background-color: #fff;
            padding: 50px;
        }

        #casco-comparison h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        #casco-comparison table {
            width: 100%;
            border-collapse: collapse;
        }

        #casco-comparison th,
        #casco-comparison td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        #casco-comparison th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        /* Стили для блока "Оформление ОСАГО" */
        /* Стили для блока "Оформление ОСАГО" */
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

        /* Footer styles */
        footer {
            background-color: #333333;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }

        footer a {
            color: #ffffff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <!-- Заголовок -->
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
                    <a href="CASCO.php" class="active">КАСКО</a>
                    <a href="greencard.php">Зелённая карта</a>
                    <a href="documents.php">Документы</a>
                    <a href="login.php" class="btn-login" id="loginBtn">Личный кабинет</a>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Основное содержимое -->
    <section id="casco">
        <h2>Страхование автомобиля КАСКО от Quick Save</h2>
        <p>Quick Save предлагает полное страхование автомобиля по программе КАСКО. Мы гарантируем защиту вашего автомобиля в случае любых непредвиденных ситуаций, включая аварии, угон и повреждение автомобиля.</p>
        <a href="#osago-form">Оформить страховку</a>
    </section>
    <section id="casco-info">
        <h2>Что включает страховка КАСКО?</h2>
        <p>Страхование КАСКО от Quick Save включает:</p>
        <ul>
            <li>Защиту от аварийных повреждений</li>
            <li>Защиту от угона автомобиля</li>
            <li>Защиту от повреждений, вызванных стихийными бедствиями</li>
            <li>Защиту от повреждений, вызванных противоправными действиями третьих лиц</li>
            <li>Помощь на дороге в случае поломки или аварии</li>
        </ul>
    </section>
    <section id="casco-pros-cons">
        <h2>Преимущества и недостатки КАСКО</h2>
        <div>
            <h3>Преимущества</h3>
            <ul>
                <li class="pros">Защита от финансовых потерь при авариях и повреждениях</li>
                <li class="pros">Возможность получить компенсацию в случае угона автомобиля</li>
                <li class="pros">Помощь на дороге в случае поломки или аварии</li>
            </ul>
        </div>
        <div>
            <h3>Недостатки</h3>
            <ul>
                <li class="cons">Дополнительные расходы на страховку</li>
                <li class="cons">Возможность выплаты только при наступлении страхового случая</li>
                <li class="cons">Ограничения и исключения в условиях страхования</li>
            </ul>
        </div>
    </section>
    <section id="express-casco">
        <h2>Экспресс КАСКО</h2>
        <p>Quick Save предлагает быстрое и удобное страхование автомобиля по программе Экспресс КАСКО. Эта программа позволяет получить защиту вашего автомобиля по упрощенной схеме оформления страховки.</p>
    </section>

    <section id="casco-comparison">
        <h2>Сравнение обычного КАСКО и Экспресс КАСКО</h2>
        <table>
            <tr>
                <th>Характеристика</th>
                <th>Обычное КАСКО</th>
                <th>Экспресс КАСКО</th>
            </tr>
            <tr>
                <td>Оформление</td>
                <td>Требуется заполнение большого количества документов</td>
                <td>Упрощенное оформление без лишних бумажных формальностей</td>
            </tr>
            <tr>
                <td>Скорость оформления</td>
                <td>Обычно требуется несколько дней для рассмотрения и оформления</td>
                <td>Оформление происходит в течение нескольких часов</td>
            </tr>
            <tr>
                <td>Покрытие страхования</td>
                <td>Обширное покрытие, включающее аварии, угон и повреждение автомобиля</td>
                <td>Базовое покрытие, исключающее некоторые риски и события</td>
            </tr>
        </table>
    </section>

    <section id="express-casco">
        <h2>Экспресс КАСКО</h2>
        <p>Quick Save предлагает быстрое и удобное страхование автомобиля по программе Экспресс КАСКО. Эта программа позволяет получить защиту вашего автомобиля по упрощенной схеме оформления страховки.</p>
    </section>

    <section id="casco-comparison">
        <h2>Сравнение обычного КАСКО и Экспресс КАСКО</h2>
        <table>
            <tr>
                <th>Характеристика</th>
                <th>Обычное КАСКО</th>
                <th>Экспресс КАСКО</th>
            </tr>
            <tr>
                <td>Оформление</td>
                <td>Требуется заполнение большого количества документов</td>
                <td>Упрощенное оформление без лишних бумажных формальностей</td>
            </tr>
            <tr>
                <td>Скорость оформления</td>
                <td>Обычно требуется несколько дней для рассмотрения и оформления</td>
                <td>Оформление происходит в течение нескольких часов</td>
            </tr>
            <tr>
                <td>Покрытие страхования</td>
                <td>Обширное покрытие, включающее аварии, угон и повреждение автомобиля</td>
                <td>Базовое покрытие, исключающее некоторые риски и события</td>
            </tr>
        </table>
    </section>

    <section id="osago-form">
    <h2>Стоимость страхования КАСКО</h2>
    <form action="CASCO.php" method="post" onsubmit="return processForm(event)">
        <label for="car-details">Марка и год выпуска автомобиля:</label>
        <input type="text" id="car-details" name="car-details" required>
        <label for="insurance-type">Тип страхования:</label>
        <select id="insurance-type" name="insurance-type">
            <option value="kasko">КАСКО</option>
            <option value="express-kasko">Экспресс-КАСКО</option>
        </select>

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