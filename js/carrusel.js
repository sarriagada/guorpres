var foto=1
function cambiar(mas, total){
	foto = foto + mas;
	
	if (foto > total){
		foto=1;}
		
	if (foto < 1){
		foto = total;}
		
	document.album.src="../img/img"+foto+".jpg"
}
	