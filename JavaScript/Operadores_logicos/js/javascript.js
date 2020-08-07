
/*if (2==2 && 3>=1){
  document.write("Verdadeiro");
}else {
	document.write("Falso");
}*/

var nota = prompt('digite a nota');
var falta = prompt('digite as faltas');

var media = 7;
var faltas_maximas = 15;

if (nota >= media && falta <= faltas_maximas) {
	document.write('Aprovado');
}else {
	document.write('Reprovado');
}

//operados ternarios
var resultado = (condicao) ? <verdadeiro> : <falso>
