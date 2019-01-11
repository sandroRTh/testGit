function addball () {
	var ball = document.createElement ('div');
	ball.setAttribute ('class', 'ball');

	var p1 = Math.floor (Math.random() * 1280);
	var p2 = Math.floor (Math.random() * 900);
	var X = Math.floor (Math.random() * 256);
	var Y = Math.floor (Math.random() * 256);
	var Z = Math.floor (Math.random() * 256);
	var bgColor = "rgb(" + X + "," + Y + "," + Z + ")";
	console.log(bgColor);
	ball.setAttribute ('style','left:'+p1+'px;top:'+p2+'px;background-color:'+bgColor);
	ball.setAttribute ('onclick','toburst(this)');

	document.body.appendChild(ball);
}

function toburst (element) {
	document.body.removeChild(element);
	document.getElementById('score').innerHTML++;
}

function timer () {
	setInterval (addball, 1000);
	
}