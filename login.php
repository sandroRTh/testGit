<?php
	session_start();

	if (isset($_POST['email']) && !empty($_POST['email'])) {
		
		$email = addslashes($_POST['email']);
		$passwd = md5(addslashes($_POST['passwd']));

		$dsn = "mysql:dbname=database0;host=127.0.0.1";
		$dbuser = "root";
		$dbpass = "";
		
		try {
			$db = new PDO($dsn, $dbuser, $dbpass);

			$sql = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$passwd'");

			if($sql->rowCount() > 0) {
				
				$data = $sql->fetch();
				
				$_SESSION['id'] = $data['id'];

				header("Location: session.php");
			} else {
				echo "Senha incorreta.<br>";
			}
		} catch(PDOException $e){
			echo "Falha ".$e->getMessage();
		}
	} else {
		echo "Campo \"email\" obrigatorio<br>";
	}

?>
	Página de login.

	<form method="POST">
		Email:<br>
		<input type="email" name="email"><br><br>

		Senha:<br>
		<input type="password" name="passwd"><br><br>

		<input type="submit" value="Login">

	</form>