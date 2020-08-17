<?php

	class Veiculo {

		public $placa = null;
		public $cor = null;

		function acelerar(){
			echo 'Acelerar';
		}
		function freiar() {
			echo 'Freiar';
		}

		function trocarMarcha() {
			echo 'Desengartar embreagem com o pé e emgatar a marcha com a mão';
		}
	}

	class Carro extends Veiculo {

		public $teto_solar = true;

		function __construct($placa,$cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posição volante';
		}

	}

	class Moto extends Veiculo {

		public $contra_peso_guidao= true;

		function __construct($placa,$cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}

		function trocarMarcha() {
			echo 'Desengartar embreagem com a mão e emgatar a marcha com o pé';
		}
	}

	class Caminhao extends Veiculo {

	}


	$carro = new Carro('abc1234','branco');
	$moto = new Moto('def5678','preta');
	$caminhao = new Caminhao();

	$carro->trocarMarcha();
	echo '<br>';
	$moto->trocarMarcha();
	echo '<br>';
	$caminhao->trocarMarcha();

?>