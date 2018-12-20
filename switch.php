<form method="POST">
	Digite casa, escola, trabalho ou nenhum dos três:<br>
	<input type="text" name="text" maxlength="15">
	<input type="submit" name="send">
</form>
<hr>
<?php
	if (isset($_POST["text"]) && !empty($_POST["text"])) {
		$text = ($_POST["text"]);
		switch($text) {
			case "casa":
				echo "Você digitou ".$text.".";
				break;
			case 'escola':
				echo "Você digitou ".$text.".";
				break;
			case 'trabalho':
				echo "Você digitou ".$text.".";
				break;
			case 'nenhum dos três':
				echo "Easter Egg!";
				break;
			default:
				echo "Você não digitou nenhuma das alternativas.";
				break;
		}
	}
	elseif (isset($_POST["text"]) && empty($_POST["text"])) {
		echo "Você não digitou nada.";
	}
?>