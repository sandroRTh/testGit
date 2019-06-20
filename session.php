<?php

	session_start();

	if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
		echo "Login efetuado com sucesso.";
	} else {
		header("Location: login.php");
	}
?>