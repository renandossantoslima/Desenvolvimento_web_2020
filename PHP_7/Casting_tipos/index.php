<!DOCTYPE html>
<html>
	<head>
		<title>Casting de tipos</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

			//getType() => retorna o tipo da variavel

			$valor = true;



			// valor inteiro
			//$valor2 = (real) $valor; //float, double e real
			//$valor2 = (string) $valor;

			//valor float
			//$valor2 = (int) $valor; //integer
			//$valor2 = (string) $valor;

			//valor string
			//$valor2 = (integer) $valor;//valor numerico
			//$valor2 = (float) $valor;//valor numeric
			//$valor2 = (boolean) $valor;//boll, boolean


			//valor booleanos
			//$valor2 = (int) $valor;
			$valor2 = (string) $valor;

			echo $valor .' '. getType($valor);
			echo '<br>';
			echo $valor2 .' '. getType($valor2);
			
		?>

	</body>
</html>