<div class="container">
	<?php
	$article = get_article_by_id($_GET['id']);
	$name_author = get_authors($article["idauthor"]);
	$name_categ = get_category($article["idcategory"]);?>
	<figure class="figure2">
		<img src="<?php echo $article["img"];?>" alt="Здесь должна быть фотка" class="img2"></a>
		<p class="titlearticle"><?php echo $article["title"];?></p>
		<div class="text2"><?php echo $article["content"];?></div>
		<div class="inform">
			<ul class="ul">
				<li><?php echo $name_categ;?></li>
				<li><?php echo $name_author;?></li>
				<li><?php echo date("d.m.Y",strtotime($article["data"]));?></li>
			</ul>
		</div>
	</figure>
</div>