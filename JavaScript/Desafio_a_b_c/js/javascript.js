

/*variaveis*/
var a =10;
var b = 20;
var c= null;

document.write('a = '+ a + '<br>');
document.write('b = '+ b + '<br>');
document.write('c = '+ c + '<br>');



/* Inversão dos valores a e b*/
c = a;/*c recebe valor de a*/

a = b;/*a  recebe valor de b*/
b = c;/*b recebe valor de c*/

c = null;/*c retorna a ser null*/

document.write('a = '+ a + '<br>');
document.write('b = '+ b + '<br>');
document.write('c = '+ c + '<br>');