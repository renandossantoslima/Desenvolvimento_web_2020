<!DOCTYPE html>
<html>
	<head>
		<title>Atividade para fixação do conteúdo</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			$idade = 21;
			$peso = 52;

			if(($idade >= 16 && $idade <=69) &&$peso >= 50){
				echo 'Atende os requisitos';
			}else{
				echo 'Não atende os requisitos';
			}

		?>

	</body>
</html>