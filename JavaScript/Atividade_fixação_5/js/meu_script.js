var objetos = Array('Cadeira','Impressora','Garfo');

function adicionar() {
	var valor = document.getElementById('objeto').value;
	var auxiliar = objetos.indexOf(valor);

	if (valor == ''){
		alert('Informe um valor válido');
	}else{
		//verifica se valor existe no array
		if (objetos[auxiliar] == valor){
			alert('Objeto já adicionado');
		}else{
			objetos.push(valor);
			console.log(objetos);
			document.getElementById('objeto').value = '';
		}
	}
}


function ordernar() {
	console.log(objetos.sort());
}