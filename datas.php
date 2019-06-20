<?php
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
	$currentdate = date("d-m-Y");

	echo "$currentdate<br/>";
	
	echo strftime('<br/>Estrela, %A, %d de %B de %Y', strtotime('today'));
	echo date(" h:ia \G\M\T P ");
?>