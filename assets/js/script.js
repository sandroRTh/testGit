// Comentário de uma linha.
/* Comentário
de multiplas linhas.
Para explicações mais longas
*/

/*
Criar uma função: function (nome da sua função) () {
	código a ser executado pela função.
		exemplo abaixo.
}
*/
function execAction() {
	var area = document.getElementById('area');
	var texto = prompt("Qual é o seu Nome?");

	area.innerHTML = texto; 
}

function mestre(nome, sobrenome) {
	var outra = document.getElementById('outra');
	var texto1 = prompt("Qual é o seu Sobrenome?");

	outra.innerHTML = nome+" "+texto1;
}