<?php

	session_start();

	//estamos trabalhando na montagem do texto
	/*$titulo = str_replace('#','-',$_POST['titulo']);
	$categoria = str_replace('#', '-',$_POST['categoria']);
	$descricao = str_replace('#', '-',$_POST['descricao']);*/

	$texto_implode = $_SESSION['id'] . '#' . implode('#', str_replace('#', '-', $_POST)) . PHP_EOL;

	//$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' .$descricao . PHP_EOL;

	$arquivo = fopen('../../../../App_help_desk/arquivo.txt', 'a');//abre o arquivo


	fwrite($arquivo, $texto_implode);//escreve no arquivo

	fclose($arquivo);//fecha o arquivo

	//echo $texto;

	header('Location: abrir_chamado.php');

?>