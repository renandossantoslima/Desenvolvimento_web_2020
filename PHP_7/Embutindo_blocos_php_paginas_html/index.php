<!DOCTYPE html>
<html>
	<head>
		<title>Embutindo blocos php em páginas html</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php 
			echo 'Utilizando a tag padrão';
		?>
		<br>
		<?=
			'Utilizando a tag impressão'
		?>
	</body>
</html>