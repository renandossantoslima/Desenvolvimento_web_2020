<!DOCTYPE html>
<html>
	<head>
		<title>Array</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			/*
			//array sequenciais (númericos)
			//$lista_frutas = array('Banana','Maça','Morango','Uva','Abacate');
			$lista_frutas = ['Banana','Maça','Morango','Uva','Abacate'];
			$lista_frutas[] = 'Abacaxi';

			/*
			echo '<pre>';
				var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr>';

			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';

			echo $lista_frutas[0];*/


			//arrays associativos
			$lista_frutas = array('a' => 'Banana','b' => 'Maça','x' => 'Morango','d' => 'Uva','2' => 'Abacate');

			$lista_frutas['w'] = 'Abacaxi';
			var_dump($lista_frutas);

			echo '<br>';
			echo $lista_frutas['w'];

		?>

		


	</body>
</html>