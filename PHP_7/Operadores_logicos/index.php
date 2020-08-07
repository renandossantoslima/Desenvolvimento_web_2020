<!DOCTYPE html>
<html>
	<head>
		<title>Operadores logicos</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			//operadores de comparação
			//==
			//===
			//!= ou <>
			//!==
			//<
			//>
			//<=
			//>=

			//operadores lógicos
			//E = && ou AND => todos tem que ser verdadeiros
			//Ou = || ou OR => pelo menos um verdadeiro
			//XOR => retorna verdadeiro e uma for verdadeira e outra falsa, ou vice-versa
			//! => inverte o resultado retornado pela expressão


			// () -> estabelecer precedencia


			if((22 == 22 && 3==3) || 5 != 5){
				echo 'verdadeiro';
			}else{
				echo 'falso';
			}
			
			
		?>

	</body>
</html>