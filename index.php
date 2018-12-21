<?php
// single line comment
/* more than
one line comment */

$nome = "Fulano"; //string variable(texto) 
$sobrenome = "Pereira";
$idade = 90; //inteiro, int, integer variable
$dinheiro = 10.55; //float variable(número com vírgula.)
$ligado = true; // boolean variable (verdadeiro/falso)
$grupos = array(1, 2, 3, 4); //array (variavel composta)


echo nl2br("Meu nome é ".$nome." ".$sobrenome." e eu tenho ".$idade." anos.\n");

//outra forma de gerar o mesmo resultado acima, na tela

echo "Meu nome é ";
echo $nome." ";
echo $sobrenome." e eu tenho ";
echo $idade." anos.";
?>

text for test purposes only