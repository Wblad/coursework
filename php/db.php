<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = "localhost";
$username = "root";
$userpassword = "root";
$conn = new mysqli($servername, $username, $userpassword, "db");
function get_article()
{
	global $conn;
	$article = $conn->query("SELECT * FROM article");
	return $article;
}
function get_article_by_id($id)
{
	global $conn;
	$article = $conn->query("SELECT * FROM article WHERE id = $id");
	foreach ($article as $articles)
	{
		return $articles;
	}
}
function get_category($id)
{
	global $conn;
	$category = $conn->query("SELECT * FROM categories WHERE id = $id");
	foreach ($category as $categories)
	{
		return $categories["category"];
	}
}
function get_authors($id)
{
	global $conn;
	$author = $conn->query("SELECT * FROM authors WHERE id = $id");
	foreach ($author as $authors)
	{
		return $authors["author"];
	}
}
/*function new_article()
{
	if(isset($_POST['action']))
	{
		$acrtion = $_POST['action'];
	}else
	{
		$action = "";
	}
	if($action == "add")
	{
		echo 'Статья успешно добавлена';
	}else
	{
		header('Location: ../index.php');
	}
}*/
?>