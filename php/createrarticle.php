<?php
	require 'db.php';
	$title = $_POST['title'];
	$content = $_POST['content'];
	$img = trim($_POST['img']);
	$idcategory = $_POST['idcategory'];
	$idauthor = '1';
	$data = $_POST['date'];
	$sql = "INSERT INTO `article` (`id`, `title`, `content`, `img`, `idcategory`, `idauthor`, `data`) VALUES (NULL, '$title', '$content', '$img', '$idcategory', '$idauthor', '$data')";
	$result = mysqli_query($conn, $sql);
?>