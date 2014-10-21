var indice=2;

$(document).ready(function(){
	var images= $('#diaporama img');
	images.hide();
	$('#diaporama img:first').fadeIn(2000);
	transicion();
});

function transicion(){
	setInterval(function(){
		var num=$('#diaporama > img').size();
		if(indice>num){indice=1;}
		$('#diaporama > img').fadeOut(1900);
		$('#diaporama img#'+indice).fadeIn(2000);
		indice=indice+1;
	},6000)
}
