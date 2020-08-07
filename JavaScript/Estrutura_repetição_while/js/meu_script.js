var x = 1;

document.write('inicio <br>')
while (x <= 10){
	document.write(x + '<br>');

	/*if(x == 5){
		break;
	}*/
	x++;
	if (x == 5){
		continue;
	}

}

document.write('fim')