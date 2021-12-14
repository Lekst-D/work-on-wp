<!DOCTYPE html>
<html>
	<head>
		<title>Таблица умножения</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
			<!-- Верхняя часть страницы -->
			<?php
			//unset($_POST);
			$cols= $_POST['column'];
			$rows=$_POST['row'];
			if(empty($rows))
			$rows=0;
			if(empty($cols))
			$cols=0;
			$color=$_POST['color'];
			if(empty($color))
			$color="blue";
			?>
			
			<!-- Верхняя часть страницы -->
			<!-- Заголовок -->
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<form action="<?= $_SERVER['REQUEST_URI']?>"  method="POST">
			<p><b>количество столбцов:</b><br>
			<input name="column" type="text" size="40"  value="<?php echo $cols;?>">
		    <p><b>количество строк:</b><br>
			<input name="row" type="text" size="40"  value="<?php echo $cols;?>">
			<p><b>цвет:</b><br>
			<input name="color" type="text" size="40" value="<?php echo $color;?>"><br>
			<input type="submit" value="Создать">
		    </form>
			<!-- Таблица -->
			<style>
				tr{
					background: maroon;
				    font-weight:bold;
				}
				.ts{background: maroon;
				    font-weight:bold;}
				.tss{background: <?php echo $color?>;
				    font-weight:normal;}
			</style>
			<?php
			include 'lib.inc.php';
				drawTable($cols+1,$rows+1);
			?>
			<!-- Таблица -->
			<!-- Область основного контента -->
			<!-- Меню -->
			<!-- Меню -->
			<!-- Нижняя часть страницы -->
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>