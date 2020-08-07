<!DOCTYPE html>
<html>
	<head>
		<title>Loop - foreach</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

			$itens = array('sofa','mesa','cadeira','fogão','geladeira');

			echo '<pre>';
				print_r($itens);
			echo '</pre>';

			foreach($itens as $item){
				echo $item;

				if($item == 'mesa'){
					echo ' (*Compre um mesa e ganhe 25% de desconto)';
				}

				echo '<br>';
			}

		?>

		


	</body>
</html>