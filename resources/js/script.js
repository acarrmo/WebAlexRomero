$(document).ready(function (e)
{
	//Establecemos el alto de la imagen superior para cuando aparezca.
	if(('header.inicio').length > 0)
	{
		var ancho = $('section.banner-superior').css('width').replace('px','');
		var altura = ancho / 10.6666667;
	}

	//Se crea el efecto del movimiento del menu
	//menu();

	//Se ajusta el alto de la imagen cuando se redimensiona el navegador
	$(window).resize(function (e){ 
		ancho = $('section.banner-superior').css('width').replace('px','');
		altura = ancho / 10.6666667;
		$('section.banner-superior').css('height',altura+'px') 
	});
	
	//se activa cuando se carga completamente el sitio, else cuando se entra por primera vez al sitio, if cuando es de la segunda en adelante
	if($('section.banner-superior > img').attr('complete') == true){
		cargaCompleta();
	}
	else
	{
		$('section.banner-superior > img').load(cargaCompleta());
	}

/*** FUNCIONES ***/

	//Se realiza la animacion de la imagen superior
	function cargaCompleta()
	{
		$('section.banner-superior').animate({height:altura},1000, function (e)
		{
			$('header > nav > img').fadeOut(500);
			$('section.contenido').fadeIn(700, function(e)
			{
				$('footer').fadeIn(700);
			});
		});
	}
});