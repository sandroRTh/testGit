function addBola(){
	var bola = document.createElement("div");
	bola.setAttribute("class","bola");
	var p1 = Math.floor(Math.random() * 500);
	var p2 = Math.floor(Math.random() * 400);
	var idCor = Math.floor(Math.random() * 4);
	var cores = ["green", "black", "orange","blue"];
	var cor = cores[idCor];
	bola.setAttribute("style","left:"+p1+"px;top:"+p2+"px;background-color:"+cor);
	bola.setAttribute("onclick","estourar(this)");
	document.body.appendChild(bola);

}

function estourar(obj){
	document.body.removeChild(obj);
	document.getElementById('placar').innerHTML++;
}

function iniciar(){
	/*i = 0;
	while(i < numero) {
    	addBola();
    	i++;
	}*/
	setInterval(addBola,700);
}