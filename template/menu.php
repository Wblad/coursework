<?php
require 'D:\open server panel\openserver\domains\Belarus\php\db.php';
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Belarus</title>
</head>
<body>
<div class="menu">
		<div class="search">
			<form action="../php/search.php" method="get">
				<input type="search" name="search" placeholder="Поиск...">
			</form>
		</div>
		<div class="general">
			<p>Главное</p>
			<ul class="sort">
				<li><a href="../index.php?id_category=1">Авто</a></li>
				<li><a href="../index.php?id_category=2">Наука</a></li>
				<li><a href="../index.php?id_category=3">Спорт</a></li>
				<li><a href="../index.php?id_category=4">Финансы</a></li>
				<li><a href="../index.php?id_category=5">Культура</a></li>
			</ul>
			<?php if($_COOKIE['user']== ''): ?>
			<div class="account">
				<a href="../php/account.php"><p>Войти в мою ленту</p></a>
			<?php else: ?>
				<div class="user">
					<p>Привет, <?=$_COOKIE['user']?></p>
					<a href="../php/addarticle.php"><p>Добавить статью</p></a>
					<a href="../php/exit.php" class="exit">Выйти</a>
				</div>
			<?php endif; ?>
			</div>
			<a href="https://www.who.int/ru/emergencies/diseases/novel-coronavirus-2019" class="a">Все о короновирусе</a>
		</div>
</div>