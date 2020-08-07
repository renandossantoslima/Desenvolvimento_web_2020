<!DOCTYPE html>
<html>
	<head>
		<title>Funções natovas para manipular datas</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			/*
			//reduperação da data atual / data corrente
			//echo date('D');

			//dia/mes/ano hroa:minutos
			echo date('d/m/Y H:i');

			//
			echo '<br>';
			echo date_default_timezone_get();
			echo date_default_timezone_set('America/Sao_Paulo');
			echo '<br>';
			echo date('d/m/Y H:i');
			*/

			$data_inicial = '2019-06-19';
			$data_final = '2019-07-19';

			//timestamp
			//01/01/1970 (js - milisegundos / php - segundos)

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);
			echo $data_inicial . ' - ' . $time_inicial;
			echo '<br>';
			echo $data_final . ' - ' . $time_final;


			$diferenca_times = $time_final - $time_inicial;//abs
			//$diferenca_times = abs($time_inicial - $time_final);
			echo '<br>';
			echo 'Adiferença de segundos entre a data inicial e final é '. $diferenca_times;

			$segundos_existem_dia = 24 * 60 *60;
			echo '<br>';
			echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

			$diferenca_dias = $diferenca_times / $segundos_existem_dia;

			echo '<br>';
			echo 'A diferença em dias é: ' . $diferenca_dias;


		?>

		


	</body>
</html>