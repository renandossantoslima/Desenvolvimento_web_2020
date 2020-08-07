<!DOCTYPE html>
<html>
	<head>
		<title>Operadores pratica</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			
			
			$usuario_possui_cartao = true;
			$valor = 450;

			$valor_frete = 50;

			$recebeu_desconto_frete = true;

			if($usuario_possui_cartao == true && $valor >= 400){
				$valor_frete = 0;
				

			}else if($usuario_possui_cartao == true && $valor >= 300){
				$valor_frete = 10;
				

			}else if($usuario_possui_cartao == true && $valor >= 100){
				$valor_frete = 25;
				

			}else{
				$recebeu_desconto_frete = false;
			}
		?>

		<h1>Detalhes do pedido</h1>

		<p>Possui cartao da loja?<?php
			if($usuario_possui_cartao){
				echo 'sim';
			}else{
				echo 'não';
			}
			?>
			
		</p>
		

		<p>Valor da compra: <?= $valor ?></p>

		<p>Recebeu desconto no frete?<?php
			if($recebeu_desconto_frete){
				echo 'sim';
			}else{
				echo 'não';
			}
			?>
			
		</p>

		<p>Valor do frete: <?= $valor_frete ?></p>

	</body>
</html>