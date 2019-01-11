function validate () {
	var value = document.getElementById('number').value;
	if (value.length > 2) {
		alert ('Combinação inválida, tente novamente.');
		return false;
	} else if (value.length == 0){
		alert ('Campo em branco, tente novamente.');
		return false;
	} else {
		return true;
	}
}