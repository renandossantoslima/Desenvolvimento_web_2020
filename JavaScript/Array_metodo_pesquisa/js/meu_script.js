var lista_frutas = Array();

lista_frutas[0] = 'Banana';
lista_frutas[1] = 'Maça';
lista_frutas[2] = 'Morango';
lista_frutas[3] = 'Uva';

var existe = lista_frutas.indexOf('Uva');

if (existe == -1){
	console.log('elemento não existe');
}else{
	console.log('Elemento existe e está na posição ' + existe);
}