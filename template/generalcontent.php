<div class="container">
	<?php
	$get = $_GET['id_category'];
	$sel_get = mysqli_query($conn, "SELECT * FROM article WHERE `idcategory` LIKE '%$get%' ORDER BY 'id'");
	while ($articles = mysqli_fetch_assoc($sel_get))
	{
		$name_author = get_authors($articles["idauthor"]);
		$name_categ = get_category($articles["idcategory"]);?>
		<figure class="figure">
			<a href="Article.php?id=<?php echo $articles["id"];?>">
			<img src="<?php echo $articles["img"];?>" alt="Здесь должна быть фотка" class="img">
			</a>
			<a href="Article.php?id=<?php echo $articles["id"];?>" class="titlearticle">
			<?php echo $articles["title"];?>
			</a>
			<div class="text">
				<?php echo substr($articles["content"], 0, 450), "...";?>
			</div>
			<div class="inform">
				<ul class="ul">
					<li><?php echo $name_categ;?></li>
					<li><?php echo $name_author;?></li>
					<li><?php echo date("d.m.Y",strtotime($articles["data"]));?></li>
				</ul>
			</div>
		</figure>
	<?php } ?>
</div>