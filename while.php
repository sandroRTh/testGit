<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="assets/imgs/s_icon.jpg" type="image/jpeg">
		<title>Tabuada</title>
	</head>
	<body>
		<form method="POST">
			Digite o número desejado para calcular a sua tabuada:
			<input type="number" min="1" name="var1" maxlength="5" required>
			<br>
			<br>
			Digite agora até quantas vezes você quer que ela seja calculada:
			<input type="number" min="1" name="var2" maxlength="2" required>	
			<input type="submit" name="send">
			<br>
		</form>	
	</body>
</html>
<hr>
<?php
	if (isset($_POST['var1']) && !empty($_POST['var1'])){ //esta verificação é redundante por causa do required inserido nos inputs.
		$multiplying = $_POST['var1']; //número do qual você quer saber a tabuada.
		$x = $_POST['var2']; //número de vezes que você quer calcular, por ex: 1 X y, 2 X y, 15 X y
		$multiplier = 1; //multiplicador
		echo '<h3>Resultado:</h3>';
		while ($multiplier <= $x) {
			echo "$multiplier X $multiplying = ".$multiplier * $multiplying.'<br/>';
			$multiplier++;
		}
	}
?>



