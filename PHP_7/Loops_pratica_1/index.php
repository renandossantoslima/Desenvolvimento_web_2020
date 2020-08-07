<!DOCTYPE html>
<html>
	<head>
		<title>Loop - pratica com arrays</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

			$registros = array(
				array('titulo' => 'Titulo noticia 1', 'conteudo' => 'conteudo1'),
				array('titulo' => 'Titulo noticia 2', 'conteudo' => 'conteudo2'),
				array('titulo' => 'Titulo noticia 3', 'conteudo' => 'conteudo3'));

			echo '<pre>';
				print_r($registros);
			echo '</pre>';

			echo '<br> <br>';

			//$idx = 0;

			//count -> contar a quantdade de elementos de um array

			/*
			while($idx < count($registros)){

				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				echo '<hr>';

				$idx++;
			}*/

			/*
			do {

				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				echo '<hr>';

				$idx++;

			} while($idx < count($registros));
			*/

			for($idx = 0; $idx < count($registros);$idx++){
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				echo '<hr>';
			}
		?>

		


	</body>
</html>