//setTimeout(function(){document.write('Teste')},1000);

var i = 5;

var x = setInterval(function(){
	document.write(i); 
	i--;

	if(i == 0){
		//window.location.reload();
		clearInterval(x);
	}

},1000);