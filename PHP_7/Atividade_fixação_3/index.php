<!DOCTYPE html>
<html>
	<head>
		<title>Atividade de fixação</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			$sorteio = array();

			for($x = 0; $x < 6 ;$x++){
				
				$num = rand(1,10);

				//$sorteio[$x] = $num;

				$existe = in_array($num,$sorteio);

				if($existe == true){
					echo 'Entrou <br>';
					$num = rand(1,10);
					$sorteio[$x] = $num;
				}

				$sorteio[$x] = $num;


			}

			echo '<pre>';
				print_r($sorteio);
			echo '</pre>';
		?>

	</body>
</html>