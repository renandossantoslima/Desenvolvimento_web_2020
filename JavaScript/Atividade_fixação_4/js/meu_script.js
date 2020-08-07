function amarelo(){
	document.getElementById('texto').style.backgroundColor = 'yellow';
}


function focoFora(){
	//valor
	var conteudo = document.getElementById('texto').value;

	if (conteudo.length < 3){
		document.getElementById('texto').style.backgroundColor = 'red';
	}else{
		document.getElementById('texto').style.backgroundColor = 'green';
	}
}