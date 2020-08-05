$(document).ready(function (e)
{
	$('.dc-slider img:not(img:first-child)').css('display','none');
	var numImgs = $('.dc-slider img').length;
	var imgs = new Array();
	var indice = 0;
	$('.dc-slider img').each(function (e){
		imgs[indice] = $(this);
		indice++;
	});

	var imgActual = 0;

	setInterval(cambio, 5000);

	function cambio()
	{
		imgs[imgActual].fadeOut(700,function (e)
		{
			imgActual++;
			if(imgActual>=numImgs) imgActual = 0;
			imgs[imgActual].fadeIn(700);
		})
	}
});