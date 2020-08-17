<?php

	//defini o modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		
		//getters setters magicos (overloading / sobrecarga)
		function __set($atributo,$valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		//getters setters
		/*
		function setNome($nome){
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		function getNome(){
			return $this->nome;
		}

		function getNumFilhos(){
			return $this->numFilhos;
		}

		function getTelefone(){
			return $this->telefone;
		}*/

		//metodos
		function resunirCadFunc() {
			return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s)' . ' e o seu telefone é '. $this->__get('telefone');
		}

		function modificarNumFilhos($numFilhos) {
			//afetar um atributo objeto
			$this->numFilhos = $numFilhos;

		}
	}

	$x = new Funcionario();

	$x->__set('nome','Renan');
	$x->__set('numFilhos',1);
	$x->__set('telefone',"12325430");
	$x->__set('cargo','analista junior');
	$x->__set('salario',1500);
	echo $x->resunirCadFunc();
	//echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s)' . ' e o seu telefone é '. $x->__get('telefone'). '. Salario é de '. $x->__get('salario') .  ' no cargo '. $x->__get('cargo');

	echo '<hr>';

	$y = new Funcionario();
	$y->__set('nome','Maria');
	$y->__set('numFilhos',0);
	$y->__set('telefone','144785');
	echo $y->resunirCadFunc();

	

?>