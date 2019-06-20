<form method="POST">

	Nome:*
	<input type="text" name="name" /><br/><br/>

	e-mail:*
	<input type="email" name="email" /><br/><br/>

	Mensagem:*<br/>
	<textarea name="message"></textarea><br/><br/>
	<input type="submit" vale="Enviar">
	
</form>
<?php
if (isset($_POST['name']) && !empty($_POST['name'])) 
{
	if (isset($_POST['email']) && !empty($_POST['email']))
	{
		if (isset($_POST['message']) && !empty($_POST['message']))
		{
			$name = addslashes($_POST['name']);
			$email = addslashes($_POST['email']);
			$message = addslashes($_POST['message']);
			$send_to = "sandro.thome@outlook.com";
			$subject = "Mensagem do site";
			$message_body = "nome: ".$name." - e-mail: ".$email." - MEnsagem: ".$message;
			$header = "From: example@email.com"."\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/".phpversion();

			mail($send_to, $subject, $message, $header);
			echo "<h2>E-mail enviado com sucesso</h2>";
			exit;
		}
		else
		{
			echo 'Por favor preencha todos os campos';
		}
	}
	else
		{
			echo 'Por favor preencha todos os campos';
		}
}
else
{
	echo 'Por favor preencha todos os campos';
}
?>