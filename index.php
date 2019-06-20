<?php
	try {
		$pdo = new PDO("mysql:dbname=sort_results;host=localhost", "root", "qwe123");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
		echo "Falha ao conectar".$e->getMessage();
		exit;
	}
		if (isset($_GET['sort']) && !empty($_GET['sort'])) {
			$sort = addslashes($_GET['sort']);
			$sql = "SELECT * FROM users ORDER BY ".$sort;
	} else {
		$sort = '';
		$sql = "SELECT * FROM users";
	}
?>

	<form method="GET">
		Ordenar por:
		<select name="sort" onchange="this.form.submit()">
			<option></option>
			<option value="name" <?php echo ($sort=='name')? 'selected="selected"':'';?>>Nome</option>
			<option value="age" <?php echo ($sort=='age')? 'selected="selected"':'';?>>Idade</option>
		</select>
	</form>
	<table border="1" width="400">
		<tr>
			<th>Nome</th>
			<th>Idade</th>
		<tr>
<?php
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		
		foreach ($sql->fetchAll() as $user):
			?>
			<tr>
				<td><?php echo $user['name']?></td>
				<td><?php echo $user['age']?></td>
			</tr>
		  	<?php
		endforeach; 	  	
	}  	
?>

	</table>
