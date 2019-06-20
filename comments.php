<?php
	try{
		$pdo = new PDO('mysql:dbname=database;host=localhost', 'root','');
	} catch(PDOException $e) {
		echo "Falha ao conectar ao banco de dados. Erro: ".$e->getMessage();
		exit;
	}

	if (isset($_POST['name']) && !empty($_POST['name'])) {
		$name = $_POST['name'];
		$message = $_POST['message'];

		$sql = $pdo->prepare("INSERT INTO comments SET date_sent = NOW(), name = :name, message = :message");
		$sql->bindValue(":name", $name);
		$sql->bindValue(":message", $message);
		$sql->execute();
	}
?>

	<fieldset>
		<form method="POST">
			Nome:
			<br>
			<input type="text" name="name">
			<br>
			<br>
			Comentário:
			<br>
			<textarea name="message"></textarea>
			<br>
			<br>
			<input type="submit" value="Enviar comentário">
		</form>
	</fieldset>
	<br>
	<br>
<?php
	$sql = "SELECT * FROM comments ORDER BY date_sent DESC";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $messages): 
			?>
			<strong>Comentário de: <?php echo $messages['name'];?></strong>
			<br>
			<?php echo $messages['message'];?>
			<hr>
			<?php
		endforeach;
	} else {
		echo "Não há mensagens";
	}
?>