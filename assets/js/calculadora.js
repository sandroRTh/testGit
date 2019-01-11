function somar() {
	var campo0 = parseFloat(document.getElementById("campo0").value);
	var campo1 = parseFloat(document.getElementById("campo1").value);

	var soma = campo0 + campo1;

	/*alert("A soma é: " + soma);*/
	var resultado0 = document.getElementById('resultado0');
	resultado0.innerHTML = soma;
}

function subtrair() {
	var campo2 = parseFloat(document.getElementById("campo2").value);
	var campo3 = parseFloat(document.getElementById("campo3").value);

	var soma = campo2 - campo3;

	/*alert("A subtração é: " + soma);*/
	var resultado1 = document.getElementById('resultado1');
	resultado1.innerHTML = soma;
}

function multiplicar() {
	var campo4 = parseFloat(document.getElementById("campo4").value);
	var campo5 = parseFloat(document.getElementById("campo5").value);

	var soma = campo4 * campo5;

	/*alert("A multiplicação é: " + soma);*/
	var resultado2 = document.getElementById('resultado2');
	resultado2.innerHTML = soma;
}

function dividir() {
	var campo6 = parseFloat(document.getElementById("campo6").value);
	var campo7 = parseFloat(document.getElementById("campo7").value);

	var soma = campo6 / campo7;

	/*alert("A divisão é: " + soma);*/
	var resultado3 = document.getElementById('resultado3');
	resultado3.innerHTML = soma;
}