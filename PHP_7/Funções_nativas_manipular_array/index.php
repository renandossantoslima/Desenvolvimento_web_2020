<!DOCTYPE html>
<html>
	<head>
		<title>Funções nativas para manipular array</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			/*
			$array = array('notebook','teclado');
			$retorno = is_array($array);

			if($retorno){
				echo 'Sim';
			}else{
				echo 'Não';
			}*/

			/*
			$array = [1 => 'a',7 => 'b', 18 => 'c'];
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			$chaves_array = array_keys($array);
			echo '<pre>';
				print_r($chaves_array);
			echo '</pre>';
			*/

			/*
			$array = array('mouse','cabo hdmi','gabinet','notebook','teclado');
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			sort($array);//true ou false
			echo '<pre>';
				print_r($array);
			echo '</pre>';
			*/

			/*
			$array = array('mouse','cabo hdmi','gabinet','notebook','teclado');
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			asort($array);//true ou false
			echo '<pre>';
				print_r($array);
			echo '</pre>';*/

			/*$array = array('mouse','cabo hdmi','gabinet','notebook','teclado');
			echo '<pre>';
				print_r($array);
				echo count($array);
			echo '</pre>';*/

			/*
			$array1 = ['Maça','Morango'];
			$array2 = array('Melão','Abacate');
			$array3 = ['goiaba'];

			$novo_array = array_merge($array1,$array2,$array3);
			echo '<pre>';
				print_r($novo_array);
			echo '</pre>';*/

			/*
			$string = '05/08/2019';
			$array_retorno = explode('/',$string);
			echo '<pre>';
				echo $string;
				print_r($array_retorno);
				echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
			echo '</pre>';
			*/

			$array = ['a','b','x','y'];//a,b,x,y
			$string_retorno = implode(',',$array);
			echo $string_retorno;

		?>

		


	</body>
</html>