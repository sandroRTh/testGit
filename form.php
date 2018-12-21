<?php
	if (isset($_POST["email"]) && !empty($_POST["email"])) {
		if (isset($_POST["passwd"]) && !empty($_POST["passwd"])) {
				$email = $_POST["email"];
				$passwd = $_POST["passwd"];
				echo nl2br("Usuário enviou os dados.\n O email enviado foi: ".$email." e a senha enviada foi: ".$passwd);
		}
		else {
			echo "Faltou a senha.";
		}
	}
	else {
		if (isset($_POST["passwd"]) && !empty($_POST["passwd"])) {
			echo "Faltou o email.";
		}
	}
?>

<hr>
<form method="POST">
	Email:<br>
	<input type="email" name="email"><br><br>

	Senha:<br>
	<input type="password" name="passwd"><br><br>

	<input type="submit" name="send">
</form>
<?php
	
?>

text for test purposes only