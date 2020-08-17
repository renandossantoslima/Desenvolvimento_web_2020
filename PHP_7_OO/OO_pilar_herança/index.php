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
	}


	$carro = new Carro('abc1234','branco');
	$moto = new Moto('def5678','preta');

	echo '<pre>';
		print_r($carro);
		echo '<br>';
		print_r($moto);
	echo '</pre>';

	echo '<hr>';

	$carro->abrirTetoSolar();
	echo '<br>';
	$carro->acelerar();
	echo '<br>';
	$carro->freiar();

	echo '<hr>';

	$moto->empinar();
	echo '<br>';
	$moto->acelerar();
	echo '<br>';
	$moto->freiar();


?>