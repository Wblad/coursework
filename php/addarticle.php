<?php
	require '../template/menu.php';
	require '../template/header.html';
?>	<div class="container">
		<form  class="addarticle" action="createrarticle.php" method="post">
			<h1>Добавление записи:</h1><br>
			<p style="font-size: 22px;">Введите название статьи:</p><input class="input" type="text" name="title" placeholder="Введите название статьи..." required><br>
			<p style="font-size: 22px;">Введите имя автора:</p><input class="input" type="text" name="author" placeholder="Введите Фамилия И.О...." required><br>
			<p style="font-size: 22px;">Введите ссылку на фотографию:</p><input class="input" type="text" name="img" placeholder="Введите ссылку на фотографию..." required><br>
			<p style="font-size: 22px;">Выберите категорию:</p>
			<p><input class="radio" type="radio" name="idcategory" value='1' required> Авто
				<input class="radio" type="radio" name="idcategory" value='2' required> Наука 
				<input class="radio" type="radio" name="idcategory" value='3' required> Спорт 
				<input class="radio" type="radio" name="idcategory" value='4' required> Финансы 
				<input class="radio" type="radio" name="idcategory" value='5' required> Культура</p><br>
			<p style="font-size: 22px;">Введите дату:</p><input class="input" type="date" name="date" placeholder="Введите дату..."><br>
			<p style="font-size: 22px;">Введите содержание статьи:</p><textarea  class="input" name="content" placeholder="Введите содержание статьи..." required></textarea><br>
			<input class="input" type="submit" name="submit" style="font-size:22px;">
		</form>	
</div>	
<?php
	require '../template/footer.html';
?>
