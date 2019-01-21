<?php
	$names = array("Sandro", "Sérgio", "Laíre", "Leonardo", "Luan");

	foreach ($names as $member) {
		echo "Familiar $x: ".$member.".<br/>";
	}
?>
<html><hr></html>
<?php	
	$nomes = array(
		array ("nome" => "Sandro", "idade" => 28, "relacao" => "eu"),
		array ("nome" => "Sérgio", "idade" => 60, "relacao" => "pai"),
		array ("nome" => "Laíre", "idade" => 55, "relacao" => "mãe"),
		array ("nome" => "Leonardo", "idade" => 21, "relacao" => "irmão"),
		array ("nome" => "Luan", "idade" => 18, "relacao" => "irmão")
	);

	foreach ($nomes as $familiar) {
		if ($familiar["nome"] == "Laíre") {
			echo "A ".$familiar["nome"]." tem ".$familiar["idade"]." anos e é minha ".$familiar["relacao"].".<br/>";
		
		} else if ($familiar["nome"] == "Sandro") {
			echo "O ".$familiar["nome"]." tem ".$familiar["idade"]." anos e sou ".$familiar["relacao"].".<br/>";
		
		} else {
			echo "O ".$familiar["nome"]." tem ".$familiar["idade"]." anos e é meu ".$familiar["relacao"].".<br/>";
		}
	}
?>
<html><hr></html>
<?php
	$nome = array("Nome" => "Sandro", "Idade" => 28, "Estado" => "Rio Grande do Sul", "País" => "Brasil");

	foreach ($nome as $chave => $valor) {
		echo $chave." = ".$valor.".<br/>";
	}
?>