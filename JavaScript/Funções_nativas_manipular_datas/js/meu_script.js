var data = new Date();

/*document.write(data.getDate() + '/ ');
document.write((data.getMonth() + 1) + '/' + data.getFullYear());
*/

/*
//adicionar ou remover dias 
document.write(data.toString());
data.setDate(data.getDate() + 1 );
document.write('<br>'+data.toString());
document.write('<br>');


//adicionar ou remover messes 
document.write(data.toString());
data.setMonth(data.getMonth() + 1 );
document.write('<br>'+data.toString());


//adicionar ou remover data 
document.write(data.toString());
data.setFullYear(data.getFullYear() + 1 );
document.write('<br>'+data.toString());*/


//15/01/2019
var data1 = new Date(2019, 0, 15);

//15/08/2019
var data2 = new Date(2019, 7, 15);


document.write(data1.toString()+ '<br>');
document.write(data2.toString());
document.write('<br>');

//converter datas
document.write(data1.getTime()+ '<br>');
document.write(data2.getTime());
document.write('<br>');

//encontrar quantidade de milesegundos em data1 e data2
var milisegundos = Math.abs(data1.getTime() - data2.getTime());
document.write(milisegundos.toString());


var milisegundos_dia = (1*24*60*60*1000);
document.write(' 1 dia tem: '+ +milisegundos_dia);

document.write('<br>');
document.write('A diferença de data1 e data2 é de ' +Math.ceil(milisegundos / milisegundos_dia) + ' dias');