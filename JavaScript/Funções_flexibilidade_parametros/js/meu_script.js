/*function soma(a, b){
	return a + b;
}

console.log(soma(7,7));
console.log(soma(7,7,9,15));//desconsidera os parametors adicionais
console.log(soma(7));*/


/*parametors variaveis*/
function soma(){
	var resultado = 0;
	for(var i in arguments ){
		resultado += arguments[i];
	}

	return resultado;
}

console.log(soma(7,5,3.2,0.8,'Texto'));