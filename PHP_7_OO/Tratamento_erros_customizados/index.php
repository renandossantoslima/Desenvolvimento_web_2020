<?php


	class MinhaExceptionCustomizada extends Exception {

		private $erro = '';

		public function __construct($erro) {
			$this->erro = $erro;
		}

		public function exibirMensagemErroCustomizada() {
			echo '<div style="color:red;">';
				echo $this->erro;
			echo '</div>';
		}

	}

	try {

		throw new MinhaExceptionCustomizada('Esse é um erro de teste');


		//Error (php)
		//Exception (progamadores)
		//Customizadas (programadores)

	} catch (MinhaExceptionCustomizada $e) {
		 $e->exibirMensagemErroCustomizada();
	}

?>