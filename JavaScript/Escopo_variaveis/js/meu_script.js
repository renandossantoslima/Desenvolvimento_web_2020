// 3 escopos: global, função e bloco

var serie = "Friends";


//escopo de bloco
if (true){
	var serie2 = 'GoT';
	document.write(serie);
}

function x(){
	var serie3 = 'algo';
	document.write(serie);
	document.write(serie2);
}

x()

document.write(serie3);