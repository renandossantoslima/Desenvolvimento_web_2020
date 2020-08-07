<!DOCTYPE html>
<html>
	<head>
		<title>Array metodo de pesquisa</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			
			//in_array() => true ou false para a existencia do que está sendo procurado
			//array_search() => retorna o indice do valor pesquisado caso ele exista

			$lista_frutas = array('Banana','Maçã','Morango','Uva');

			/*echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';*/

			/*
			//$existe =  in_array('Maçã',$lista_frutas);
			//true => texto = 1
			//false => texto = vazio

			$existe = array_search('Abacate',$lista_frutas);
			//false ou null => textp vazio



			
			if($existe != null){
				echo 'Existe';
			}else{
				echo 'Não existe';
			}
			*/

			$lista_coisas= array('frutas' => $lista_frutas,'pessoas' => ['João','José','Maria']);

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre>';

			echo in_array('Uva',$lista_coisas['frutas']);

		?>

		


	</body>
</html>