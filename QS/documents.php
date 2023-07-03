<!DOCTYPE html>
<html>

<head>
    <title>Документы</title>
    <link rel="icon" href="images/logo.png">
    <!-- Подключение CSS-стилей -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <!-- Подключение JavaScript-файла -->
    <script src="JS/script.js"></script>
    <script src="JS/scripth.js"></script>
    <style>
        #documents {
            text-align: center;
            padding: 30px;
            margin-top: 120px;
            margin-bottom: 500px;
        }

        .documents-list {
            margin-top: 20px;
        }

        .documents-list ul {
            list-style-type: none;
            padding: 0;
        }

        .documents-list li {
            margin-bottom: 10px;
        }

        .documents-list a {
            color: #333;
            text-decoration: none;
        }

        .documents-list a:hover {
            text-decoration: underline;
        }

        .additional-block {
            margin: 30px 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .additional-block h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .additional-block p {
            font-size: 16px;
            line-height: 1.5;
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
                    <a href="documents.php" class="active">Документы</a>
                    <a href="login.php" class="btn-login" id="loginBtn">Личный кабинет</a>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Блок "Документы" -->
    <section id="documents">
        <h1>Документы</h1>
        <div class="documents-list">
            <ul>
                <li>
                    <a href="pdf/laws.pdf" target="_blank">Законы по которым оформляется договор страхования (PDF)</a>
                </li>
                <li>
                    <a href="pdf/contract_blank.pdf" target="_blank">Физические бланки договора (PDF)</a>
                </li>
                <li>
                    <a href="#">Прочая информация по страхованию от команды Quick Save</a>
                </li>
            </ul>
        </div>
        <div class="additional-block">
        <h2>Зачем нужна страховка?</h2>
        <p>Страховка помогает защитить вас и ваши имущество от различных рисков и неожиданных событий. Будь то автомобильная страховка, медицинская страховка или страхование имущества, она предоставляет вам финансовую защиту и спокойствие.</p>
    </div>

    <div class="additional-block">
        <h2>Преимущества нашей компании</h2>
        <p>Компания Quick Save является одним из лидеров в области страхования. Мы предлагаем надежные услуги и индивидуальный подход к каждому клиенту. Наша команда профессионалов всегда готова помочь вам выбрать оптимальные страховые планы и ответить на все ваши вопросы.</p>
    </div>
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
                        <li><a href="documents.php" class="active">Документы</a></li>
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