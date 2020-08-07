

function requisitarPagina(url){
	let ajax = new XMLHttpRequest();

				//requisição não iniciada, state = 0
	console.log(ajax.readyState);

	ajax.open('GET',url);

	//conexão estabelecida com o servidor, state = 1
	console.log(ajax.readyState);
	

	//de alguma logica que fique olhando o progresso da requisição
	ajax.onreadystatechange = function (){
		console.log(ajax.readyState);
	}

	ajax.send();
	//console.log(ajax);
}