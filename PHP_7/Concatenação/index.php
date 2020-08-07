<!DOCTYPE html>
<html>
	<head>
		<title>Concatenação</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!-- Comentário -->
		<?php

			$nome = 'Renan';
			$cor = 'azul';
			$idade = 21;
			$atividade_preferida = 'andar de bicicleta';

			// operador .
			echo 'Ola '.$nome.', cor preferid '.$cor.', sua idade é de ' .$idade .' anos e que  gosta de '.$atividade_preferida.'.';


			//aspas duplas
			echo '<br>';

			echo "Olá $nome, cor preferida $cor";
		?>

	</body>
</html>