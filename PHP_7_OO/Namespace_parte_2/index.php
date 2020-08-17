<?php

	require "../bibliotecas/lib1/lib1.php";
	require "../bibliotecas/lib2/lib2.php";

	//--------------------------
	//para usar esse tem que estar no mesmo diretório (pasta).
	//require "../bibliotecas/lib1/lib1.php";


	use A\Cliente as C1;
	use B\Cliente as C2;

	$x = new C1();
	print_r($x);
	echo $x->__get('nome');

	$x = new C2();
	print_r($x);
	echo $x->__get('nome');

?>