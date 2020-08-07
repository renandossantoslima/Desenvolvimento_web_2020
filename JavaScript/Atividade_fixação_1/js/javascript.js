
var idade = prompt("Informe a idade");

if (0 <= idade && idade <15){
	document.write("Criança");
}else if (15 <= idade && idade < 30){
	document.write("Jovem");
}else if(30 <= idade && idade < 60){
	document.write("Adulto");
}else if(60 <= idade){
	document.write("Idoso");
}else {
	document.write("Idade invalida.")
}