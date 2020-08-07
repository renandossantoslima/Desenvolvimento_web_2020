

function getDadosEnderecoPorCEP(cep){

	let url = 'https://viacep.com.br/ws/' + cep + '/json/unicode/';

	

	let xmlHttp = new XMLHttpRequest();
	xmlHttp.open('GET',url);

	xmlHttp.onreadystatechange = () => {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			let dadosJSONText = xmlHttp.responseText;
			let dadosJSONobj = JSON.parse(dadosJSONText);

			document.getElementById('endereco').value = dadosJSONobj.logradouro;
			document.getElementById('bairro').value = dadosJSONobj.bairro;
			document.getElementById('cidade').value  = dadosJSONobj.localidade;
			document.getElementById('uf').value = dadosJSONobj.uf;

			console.log(dadosJSONobj);
		}
	}

	xmlHttp.send();
}