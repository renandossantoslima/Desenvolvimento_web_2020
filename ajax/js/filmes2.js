

function getFilmes() {
	let xmlHttp = new XMLHttpRequest();
	xmlHttp.open('GET','http://localhost/Desenvolvimento%20web%20completo_2019/ajax/filmes.json');


	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			let JSONFilmes = xmlHttp.responseText;

			let objJSONFilmes = JSON.parse(JSONFilmes);
			
			//console.log(objJSONFilmes);
			

			for(let i in objJSONFilmes.filmes){
				
				let item = objJSONFilmes.filmes[i];

				console.log(item);
				
				let divRow = document.createElement('div');
				divRow.className = 'row';

				let divCol = document.createElement('div');
				divCol.className = 'col';

				let p1 = document.createElement('p');
				p1.innerHTML = '<strong>Título:</strong> ' + item.titulo;

				let p2 = document.createElement('p');
				p2.innerHTML = '<strong>Resumo:</strong> ' + item.resumo;

				let genero = '';
				for(let g in item.generos){
					if(genero){
						genero += ', ';
					}

					genero += item.generos[g].genero;
				}

				let p3 = document.createElement('p');
				p3.innerHTML = '<strong>Gênero:</strong> ' + genero;

				let elenco = '';
				for(let e in item.elenco){
					if(elenco){
						elenco += ', ';
					}

					elenco += item.elenco[e].ator;
				}

				let p4 = document.createElement('p');
				p4.innerHTML = '<strong>Elenco:</strong> ' + elenco;

				let p5 = document.createElement('p');
				p5.innerHTML = '<strong>Data de lançamaneto:</strong> ' + item.dataLancamento.data + ' (' + item.dataLancamento.pais + ')';				

				let hr = document.createElement('hr');


				divRow.appendChild(divCol);
				divCol.appendChild(p1);
				divCol.appendChild(p2);
				divCol.appendChild(p3);
				divCol.appendChild(p4);
				divCol.appendChild(p5);
				divCol.appendChild(hr);

				document.getElementById('lista').appendChild(divRow);
			}
		}

		if(xmlHttp.readyState == 4 && xmlHttp.status == 404){
			//
		}
	}


	xmlHttp.send();
}