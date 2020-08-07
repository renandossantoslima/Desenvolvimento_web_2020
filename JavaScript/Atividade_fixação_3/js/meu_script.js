function calcular(num1 , num2, operacao){
	var resultado = 0;

	if(operacao == 'soma'){
		resultado = num1 + num2;
		return resultado;
	}else{
		resultado = num1 - num2;
		return resultado;
	}
}

var num1 = prompt("Informe um numero");
var operacao = prompt('Informe a operação: soma ou subtração');
var num2 = prompt("Informe outro numero");

num1 = parseFloat(num1);
num2 = parseFloat(num2);

document.write("O resultado é: " + calcular(num1,num2,operacao));