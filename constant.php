<?php
	define("URL", "https://meusite.com");

	echo "O nome do meu site é ".URL;
?><br>
<?php
	$nome = "Sandro";
	 if ($nome == "Sandro") {
	 		echo "Meu nome está correto.";
	 }
	 else {
	 	echo "Meu nome está errado";
	 }
?>
<br>

<?php
	$nomes = array ("Sandro", "Luan");

	echo $nomes[0]." ";

	if ($nomes[0] == $nomes[1]) {
		echo "Certo.";
	}
	else {
	 	echo "Errado";
	 }
?>	
<br>

<?php
	$name =  "Sandro";
	$age = 28;
	if ($name == "Sandro" && $age == 28) {
		echo "Sou eu.";
	}
	else {
		echo "Não sou eu.";
	}
?>