function calcularAreaTerreno(largura,comprimento){
	var area = largura * comprimento;

	return area;
}

var largura = prompt("Largura");
var comprimento = prompt("Comprimento");

var area = calcularAreaTerreno(largura, comprimento);

document.write(area);
