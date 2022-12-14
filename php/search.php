<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Результаты поиска</title>
</head>
<body>
	<?php
	require '../template/menu.php';
	require '../template/header.html';
	
	$conn = mysqli_connect("localhost", "root", "root", "db");
	$word = $_GET['search'];
	$sql = "SELECT *  FROM `db`.`article` WHERE `title` LIKE '%$word%' OR `content` LIKE '%$word%'";
	$select = mysqli_query($conn, $sql);
	while ($select_while = mysqli_fetch_assoc($select))
	{
		?>
		<br>
		<a href="/Article.php?id=<?php echo $select_while['id']; ?>" class="result"><?php echo $select_while['title']; ?></a>
		<?php
	}
	require '../template/footer.html';?>
</body>
</html>
