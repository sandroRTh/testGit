<?php
	
	$file = $_FILES['file'];

	if (isset($file['tmp_name']) && !empty($file['tmp_name'])) {

		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		//$ext = $file['name'];
		$filename = md5(time().rand(0,999)).'.'.$ext; //para randomizar o nome do arquivo (evita salvar por cima de arquivos enviados com o mesmo nome)
		
		move_uploaded_file($file['tmp_name'], 'received_files/'.$filename);
		echo "Arquivo enviado com sucesso.";
	}

?>