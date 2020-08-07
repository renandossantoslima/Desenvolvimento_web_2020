<!DOCTYPE html>
<html>
	<head>
		<title>Operadore ternario</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			
			
			$usuario_possui_cartao = true;
			$valor = 450;

			$valor_frete = 50;

			$recebeu_desconto_frete = true;


			//operadores trenarios encadeados uso não recomendado

			$valor_frete_aux = $usuario_possui_cartao == true && $valor >= 400 ? 0 : ($usuario_possui_cartao == true && $valor >= 300 ? 10 : ($usuario_possui_cartao == true && $valor >= 100 ? 25 : $valor_frete ));

			$recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

			$valor_frete = $valor_frete_aux;






			/*if($usuario_possui_cartao == true && $valor >= 400){
				$valor_frete = 0;
				

			}else if($usuario_possui_cartao == true && $valor >= 300){
				$valor_frete = 10;
				

			}else if($usuario_possui_cartao == true && $valor >= 100){
				$valor_frete = 25;
				

			}else{
				$recebeu_desconto_frete = false;
			}*/
		?>

		<h1>Detalhes do pedido</h1>

		<p>Possui cartao da loja?<?= $usuario_possui_cartao == true ? "sim": 'não'; ?>
		</p>
		

		<p>Valor da compra: <?= $valor ?></p>

		<p>Recebeu desconto no frete?
			<?php
				$teste = $recebeu_desconto_frete ? 'sim': 'não';

				echo $teste;
			?>
			
		</p>

		<p>Valor do frete: <?= $valor_frete ?></p>

	</body>
</html>