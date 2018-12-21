<?php
	define("URL", "https://meusite.com");

	echo "O nome do meu site é ".URL;
?><br>
<?php
	$nome = "Fulano";
	 if ($nome == "Fulano") {
	 		echo "Meu nome está correto.";
	 }
	 else {
	 	echo "Meu nome está errado";
	 }
?>
<br>

<?php
	$nomes = array ("Fulano", "Beltrano");

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
	$name =  "Fulano";
	$age = 90;
	if ($name == "Fulano" && $age == 90) {
		echo "Sou eu.";
	}
	else {
		echo "Não sou eu.";
	}
?>

text for test purposes only