<!DOCTYPE html>
<html>
	<head>
		<title>Variáveis</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!-- Comentário -->
		<?php
			//string
			$nome = 'Renan';

			//int
			$idade = 21;

			//float
			$peso = 52.5;

			//boolean
			$fumante_sn = false;

			//-----logica ----//
			$idade = '25';
		?>

		<h1>Ficha cadastral</h1>
		<br>
		<p>Nome: <?= $nome?></p>
		<p>Idade: <?= $idade?></p>
		<p>Peso: <?= $peso?></p>
		<p>Fumante: <?= $fumante_sn?></p>

	</body>
</html>