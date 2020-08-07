

/* Exercicio 1*/
var lista_frutas = ['Abacate', 'Banana', 'Maça', 'Morango', 'Ameixa','Uva'];

console.log(lista_frutas);

for(var x = 0; x < lista_frutas.length;x++){
	document.write('Fruta: ' + lista_frutas[x] + '<br>');
	console.log(lista_frutas[x]);
}

document.write('<hr>');


/* Exercicio 2*/
var y = 1;

while(y <= 10){
	var x = 1;

	while(x <= 10){
		document.write(y + ' x ' + x +' = '+ (y*x) + '<br>');
		console.log(y + ' x ' + x +' = '+ (y*x) + '\n');
		x++;
	}

	y++;
	console.log('\n')
	document.write('<hr>');
}
