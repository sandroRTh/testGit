<?php
// single line comment
/* more than
one line comment */

$nome = "Sandro"; //string variable(texto) 
$sobrenome = "Thomé";
$idade = 28; //inteiro, int, integer variable
$dinheiro = 10.55; //float variable(número com vírgula.)
$ligado = true; // boolean variable (verdadeiro/falso)
$grupos = array(1, 2, 3, 4); //array (variavel composta)


echo "Meu nome é: ".$nome." ".$sobrenome." e eu tenho ".$idade." anos.";

//outra forma de gerar o mesmo resultado acima, na tela

echo "Meu nome é ";
echo $nome." ";
echo $sobrenome." e eu tenho ";
echo $idade." anos.";
?>