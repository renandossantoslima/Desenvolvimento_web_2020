<!DOCTYPE html>
<html>
	<head>
		<title>Variáveis contantes</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			define('BD_URL','endereco_bd_dev');
			define('BD_USUARIO','teste');
			define('BD_SENHA','1234');

			//...logica ...//
			

			echo BD_URL. '<br>';
			echo BD_USUARIO. '<br>';
			echo BD_SENHA;
		?>

	</body>
</html>