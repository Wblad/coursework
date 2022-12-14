<?php
	require 'db.php';
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	$password = $password;
	$result = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'"); 
	$user = mysqli_fetch_assoc($result);
	if(count($user) == 0)
	{
		echo "Проверьте введные данные или зарегестрируйтесь";
		exit();
	}
	setcookie('user', $user['username'], time()+3600, "/");
	header('Location: /'); exit();
?>