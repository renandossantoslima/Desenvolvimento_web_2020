/*Variaveis*/
var nome = prompt("Digite o seu nome.");
var altura = prompt("Inofrme a sua altura em centimetros");
var peso = prompt("Informe o seu peso.");

/*Coversão dos dados*/
altura = parseFloat(altura);
peso = parseFloat(peso);

/*Convertendo altura para metros*/
var altura_metros = altura/100;

/* Claculo da massa corporal */
var massa_croporal = peso / (altura_metros * altura_metros);

var informacao ="";


if (massa_croporal < 16 ){
	informacao = "Baixo peso muito grave";
}else if (massa_croporal >= 16 && massa_croporal < 17){
	informacao = "Baixo peso grave";
}else if (massa_croporal >= 17 && massa_croporal <= 18.49){
	informacao ="Baixo peso";
}else if (massa_croporal >= 18.50 && massa_croporal < 25){
	informacao = "Peso normal";
}else if (massa_croporal >= 25 && massa_croporal <= 29.99){
	informacao = "Sobrepeso";
}else if (massa_croporal >= 30 && massa_croporal <= 34.99){
	informacao = "Obesidade grau 1";
}else if (massa_croporal >= 35 && massa_croporal <= 39.99){
	informacao = "Obesidade grau 2";
}else{
	informacao = "Obesidade grau 3";
}


alert(nome + ' possui ídice de massa corporal igual a '+ massa_croporal + ', sendo classificado como: ' + informacao);