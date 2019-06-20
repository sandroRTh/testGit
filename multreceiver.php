<pre>
<?php
	print_r($_FILES);
	if (isset($_FILES['files'])) {
		echo "<br>Arquivos enviados";
		if (count($_FILES['files']['tmp_name']) > 0) {
			for ($i=0; $i < count($_FILES['files']['tmp_name']); $i++) { 
				
				$ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
				$filename = md5(time()).'.'.$ext;
				move_uploaded_file($_FILES['files']['tmp_name'][$i], 'received_files/'.$filename);
			}
		}
	}
?>
<form method="POST" enctype="multipart/form-data">
	Arquivo:<br>
	<input type="file" name="files[]" multiple><br><br>

	<input type="submit" value="Enviar">	
</form>