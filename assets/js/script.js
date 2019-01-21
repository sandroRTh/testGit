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
//Função da lista de dados
function addInfo() {
	var data = document.getElementById("data").value; //var data está pegando as informações do elemento "data" da pág html que são as informações que o usuário vai digitar.

	var userdata = document.getElementById("info").innerHTML; //informações contidas no elemento "info"(div da pág html) estão sendo armazenadas na var userdata. 
	userdata = userdata + "<li>"+data+"</li>";

	document.getElementById("info").innerHTML = userdata; //selecionando os dados novamente e definindo o conteúdo, com os dados adicionados pelo usuário
}
