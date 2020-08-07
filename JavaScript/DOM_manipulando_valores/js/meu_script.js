function distribui(){
	//selecionar o valor difgitado
	var caracter = document.getElementById('entrada').value;

	//limparo campo de digitação

	document.getElementById('entrada').value = '';

	//limpar espaços em branco nas estremidades
	caracter.trim();

	switch(caracter){
		case '0':
		case '1':
		case '2':
		case '3':
		case '4':
		case '5':
		case '6':
		case '7':
		case '8':
		case '9':
			//adiciomar o caracter no campo referente a numeros
			document.getElementById('numeros').value += caracter;
			break;
		default:
			//adicionar o caracter no campo letras
			document.getElementById('letras').value += caracter;
			break;
	}
}