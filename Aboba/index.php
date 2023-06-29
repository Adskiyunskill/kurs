<!DOCTYPE html>
<html>

<head>
	<title>Страхование автомобиля</title>
	<link rel="icon" href="images/logo.png">
	<!-- Подключение CSS-стилей -->
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/header.css">
	<link rel="stylesheet" type="text/css" href="CSS/footer.css">
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

	<!-- Блок "Главная" -->
	<section id="main">
		<h1>Страхование автомобиля</h1>
		<p>Мы предлагаем комплексное страхование автомобилей от надежных страховых компаний.</p>
	</section>

	<!-- Блок "ОСАГО" -->
	<section id="osago">
		<h2>Обязательное страхование автогражданской ответственности (ОСАГО)</h2>
		<p>ОСАГО является обязательным видом страхования для всех автовладельцев в России. Мы предлагаем выгодные условия и быстрое оформление полиса.</p>
		<a href="#">Оформить ОСАГО</a>
	</section>

	<!-- Блок "КАСКО" -->
	<section id="kasko">
		<h2>Комплексное страхование автомобиля (КАСКО)</h2>
		<p>КАСКО защищает ваш автомобиль от различных рисков, таких как столкновение, кража, пожар и др. Мы предлагаем широкий спектр услуг и возможность выбрать оптимальную страховую программу.</p>
		<a href="#">Оформить КАСКО</a>
	</section>

	<!-- Блок "Зелёная карта" -->
	<section id="green-card">
		<h2>Зелёная карта</h2>
		<p>Зелёная карта - это международный документ, подтверждающий наличие страховки на автомобиль, позволяющий его использовать за границей. Мы предлагаем быстрое оформление и максимально простые условия.</p>
		<a href="#">Оформить зелёную карту</a>
	</section>



	<!--"Почему именно Мы" -->
	<div class="why-us">
		<div class="why-us__image">
			<img src="images/ceo.jpeg" alt="Фото руководителя компании">
		</div>
		<div class="why-us__content">
			<h3>Почему именно наша компания?</h3>
			<p>Наша компания является лидером в области производства высокотехнологичных изделий. </p>
			<p>Мы предлагаем инновационные решения, которые позволяют нашим клиентам добиваться успеха в своей сфере.</p>
			<p>Наша команда состоит из высококвалифицированных специалистов, которые готовы предложить вам наилучший сервис и продукты высочайшего качества.</p>
		</div>
	</div>

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