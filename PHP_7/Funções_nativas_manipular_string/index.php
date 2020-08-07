<!DOCTYPE html>
<html>
	<head>
		<title>Funções natovas para manipular string</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

			$texto = 'Curso de PHP';

			//string to lower
			echo $texto . '<br>';
			echo strtolower($texto);

			echo '<hr>';

			//string to upper
			echo $texto . '<br>';
			echo strtoupper($texto);

			echo '<hr>';

			//upper case first
			echo $texto . '<br>';
			echo ucfirst($texto);

			echo '<hr>';

			//string length
			echo $texto . '<br>';
			echo strlen($texto);

			echo '<hr>';

			//string replace (case sencitivy)
			echo $texto . '<br>';
			echo str_replace('PHP', 'JavaScript', $texto);

			echo '<hr>';

			//substr
			echo $texto . '<br>';
			echo substr($texto,0, 5) . ' ...';

		?>

		


	</body>
</html>