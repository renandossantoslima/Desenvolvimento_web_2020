<!DOCTYPE html>
<html>
	<head>
		<title>Funções</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			//void (sem retorno)
			function exibirBoasVindas(){
				echo 'Bem-vindo ao curso de php.<br>';
			}


			exibirBoasVindas();

			//return (com retorno)
			function calcularAreaTerreno($largura,$comprimento){
				$area = $largura * $comprimento;

				return $area;
			}

			$resultado = calcularAreaTerreno(40,20);
			echo $resultado;


		?>

		


	</body>
</html>