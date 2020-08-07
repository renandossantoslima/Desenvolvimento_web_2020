function exibirArtigo(id, callbackSucesso, callbackErro){
	// recuparavia  requicissão http
	if (true){
		callbackSucesso('Funções de callback em js','Qualquer coisa');
	}else {
		callbackErro('Erro!!!!');
	}
}

var callbackSucesso = function(titulo,desricao){
	document.write(titulo + '<br>'+ descricao);
}

var callbackErro = function(erro){
	document.write('Erro: ');
}

exibirArtigo(1,callbackSucesso,callbackErro);