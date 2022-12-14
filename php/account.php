<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<title>Моя лента</title>
</head>
<body>
	<div class="container mt-1">
		<div class="row">
			<div class="col">
				<form action="auth.php" method="post">
					<h1>Авторизация</h1>
					<input type="email" class="form-control" name="email" id="email" placeholder="Введите email">
					<br>
					<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
					<br>
					<button class="btn btn-success" type="submit">Войти</button>
				</form>
			</div>
			<div class="col">
				<h1>Регестрация</h1>
				<form action="check.php" method="post">
					<input type="email" class="form-control" name="email" id="email" placeholder="Введите email">
					<br>
					<input type="text" class="form-control" name="username" id="username" placeholder="Введите имя">
					<br>
					<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
					<br>
					<button class="btn btn-success" type="submit">Зарегестрироваться</button>
				</form>
			</div>
		</div>
		

	</div>
</body>
</html>