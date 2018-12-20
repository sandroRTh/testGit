<?php
	if (isset($_POST["email"]) && !empty($_POST["email"])) {
		$email = $_POST["email"];
		echo "O email enviado foi: ".$email;
	}
	elseif (isset($_POST["email"]) && empty($_POST["email"])) {
		echo "Você não digitou nada.";
	}
?>