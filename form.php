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
<<<<<<< HEAD
	<input type="email" name="email">
	<br>
	<br>
=======
	<input type="email" name="email" value='<?php echo $_POST["email"]; ?>'><br><br>

>>>>>>> 6a7386d7778a7c6a50a3d93778ff959e24738968
	Senha:<br>
	<input type="password" name="passwd">
	<br>
	<br>
	<input type="submit" name="send">
</form>
<?php
	echo "Teste edição.";
?>