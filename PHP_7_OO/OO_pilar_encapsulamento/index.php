<?php

	class Pai {

		private $nome = 'José';
		protected $sobrenome = 'Lima';
		public $humor = 'feliz';

		/*public function getSobrenome() {
			return $this->sobrenome;
		}

		public function setSobrenome($valor) {

			if(strlen($valor) >= 3){
				$this->sobrenome = $valor;
			}
		}*/

		//overloading
		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo,$valor) {
			$this->$atributo = $valor;
		}


		private function executarMaria() {
			echo 'Assobiar';
		}

		protected function responder() {
			echo 'Oi';
		}

		public function executarAcao() {
			$x = rand(1 , 10);

			if($x >= 1 && $x <= 8) {
				$this->executarMaria();
			}else{
				$this->responder();
			}
		}
	}

	class Filho extends Pai {
		
		public function __construct() {
			//exibir os metodos do objeto
			echo '<pre>';
				print_r(get_class_methods($this));
			echo '</pre>';
		}

		private function executarMaria() {
			echo 'Cantar';
		}

		public function x(){
			$this->executarMaria();
		}

		protected function responder() {
			echo 'Ola';
		}

	}

	/*
	$pai = new Pai();

	//echo $pai->humor;
	/*echo $pai->sobrenome;
	$pai->sobrenome = 'Santos';
	echo '<br>';
	echo $pai->sobrenome

	echo $pai->executarAcao();*/

	$filho = new Filho();
	echo '<pre>';
		print_r($filho);
	echo '</pre>';
	
	$filho->executarAcao();
	echo '<br>';
	$filho->x();
	
?>