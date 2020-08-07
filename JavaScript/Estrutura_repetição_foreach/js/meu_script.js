
//foreach tem que ser igual a 0 ou maior
//valores numericos

//var listaFuncionarios = ['Viviane','Rosangela','Miguel','Lucas','Fernanda'];

var listaFuncionarios = Array();

listaFuncionarios['x'] = 'Viviane';
listaFuncionarios[false] = 'Rosangela';
listaFuncionarios[3] = 'Miguel';
listaFuncionarios[27] = 'Lucas';
listaFuncionarios[-12] = 'Fernanda';




var f = function(valor,indice){
	console.log(valor , indice);
}


listaFuncionarios.forEach(f);


/*
console.log(listaFuncionarios);
document.write(listaFuncionarios[3]);

listaFuncionarios.forEach(function(valor,indice,array){
	//logica
	console.log('indice' + indice + ' | valor: ' + valor);


	if(valor == 'Lucas'){
		array[indice] = 'Um novo valor';
	}
});


console.log(listaFuncionarios);
document.write('<br>'+listaFuncionarios[3]);
*/
