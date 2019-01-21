<?php
	if (isset($_POST['var1']) && !empty($_POST['var1'])) {
		if (isset($_POST['var2']) && !empty($_POST['var2'])){
			$multipying = $_POST['var1'];
			$multiplier = $_POST['var2'];
		} else {
				echo 'Faltou um multiplicando:';
		}	
	}
	else {
		if (isset($_POST['var2']) && !empty($_POST['var1'])) {
			echo 'Faltou um multiplicador!';
		}
	}











	/*$x = 0;
	while ($x <= 10) {
		echo 'A váriável é: '.$x.'<br>';
		$x++;
	}*/
?>