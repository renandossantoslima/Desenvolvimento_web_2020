<!DOCTYPE html>
<html>
	<head>
		<title>Loop - while</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			
			$num = 1;
			//operadores de comparação / logicos
			echo '--inicio do loop-- <br>';
			while($num < 10){

				$num++;//criterio de parada

				if($num == 2 || $num == 6){
					continue;
				}

				echo $num . '<br>';

				

				/*
				if($num > 100){
					break;
				}*/


				
			}
			echo '--fim do loop--';

		?>

		


	</body>
</html>