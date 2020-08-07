//Iniciar jogo
function iniciarJogo(){
	var nivel = document.getElementById('nivel').value;

	if (nivel == ''){
		alert('Selecione o nivel para iniciar o jogo.');
		return false;
	}


	window.location.href = "app.html?"+nivel;
}