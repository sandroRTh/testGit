/*
var x = 0;
	document.write("Loop start...</br>");
	while (x <= 10) {
		
		document.write("Número, "+x+"</br>");
		x++;
//		x = x + 1; (mesmo significado da linha de cima.)
	}

	document.write("Loop end!</br></br>");


	document.write("Another loop start...</br>");
	for (y = 0; y < 10; y++) {
		document.write("Número, "+y+"</br>")
	}
	*/
function repeater() {
	var x = parseInt(prompt("Digite um número entre 0 e 10:"));
	while (x <= 10) {
		document.write("Número, "+x+"</br>");
		x++;
	}
}