<body>
<?php
	$variavel0 = array(
		"nome" => "Fulano",
 		"sobrenome" => "da Silva",
 		"idade" => 28,
 		"atividade" => "estudando"
		);
	$variavel1 = array ("programador", "vagabundo");

	echo "Seu nome é ".$variavel0["nome"].".";
?><br>

<?php
	echo $variavel0["nome"].", não sabe se vira ".$variavel1[0].", ou se vira ".$variavel1[1], $variavel0["sobrenome"].".";
?><br>

<?php
	print_r($variavel0);
?><br>
<?php
	print_r($variavel1);
?><br>
<br>
<?php
	echo "Digite na barra de navegação:http://devserver.sandro.pc/array/?nome=(nome aqui) e pressione F5";
?><br>
<?php
	$nome = $_GET["nome"];

	echo "O nome digitado foi, ".$nome.".";
?>

text for test purposes only
</body>