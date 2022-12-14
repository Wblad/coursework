<?php
	require 'db.php';
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	if(mb_strlen($email) < 5 || mb_strlen($email) > 256)
	{
		echo "Недопустимая длина поля email";
		exit();
	}
	if(mb_strlen($username) < 2 || mb_strlen($username) > 256)
	{
		echo "Недопустимая длина поля Имя";
		exit();
	}
	if(mb_strlen($password) < 5 || mb_strlen($password) > 256)
	{
		echo "Недопустимая длина поля password";
		exit();
	}
	//$password = md5($password, "jiodjosru2356fed32");
	$sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
	$result = mysqli_query($conn, $sql);
	header('Location: /'); exit();
?>