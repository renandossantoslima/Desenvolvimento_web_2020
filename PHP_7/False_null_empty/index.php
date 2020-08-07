<!DOCTYPE html>
<html>
	<head>
		<title>Extra - flase, null e empty</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

			//flase (true e false) - tipo de variavel boolean
			//null e empty - valores especiais



			$funcionario = null;
			$funcionario2 = '';
			$funcionario3 = false;

			//valores null
			if(is_null($funcionario)){
				echo 'Sim, a variável é null';
			}else {
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			if(is_null($funcionario2)){
				echo 'Sim, a variável é null';
			}else {
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			if(is_null($funcionario3)){
				echo 'Sim, a variável é null';
			}else {
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			//valores vazios
			if(empty($funcionario)){
				echo 'Sim, a variável está vazia';
			}else {
				echo 'Não, a variável não está vazia';
			}

			echo '<br>';

			if(empty($funcionario2)){
				echo 'Sim, a variável está vazia';
			}else {
				echo 'Não, a variável não está vazia';
			}

			echo '<br>';

			if(empty($funcionario3)){
				echo 'Sim, a variável está vazia';
			}else {
				echo 'Não, a variável não está vazia';
			}


		?>

		


	</body>
</html>