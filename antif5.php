<form method ="POST">
	<input type="text" name="test">
	<input type="submit" name="submit">
</form>
<hr>
<?php
	if (isset($_POST["test"])) {
		$name = $_POST["test"];
		file_put_contents("teste.txt", $name."\n", FILE_APPEND);
		header("Location: antif5.php");
	}
?>
