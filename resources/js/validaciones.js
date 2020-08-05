$(document).ready(function ()
	{
		$('input[type=submit]').click(formContacto);
	});

function formContacto(e)
{
	var nombre = $('#nombre').val();
	var telefono = $('#telefono').val();
	var email = $("#email").val();
	var mensaje = $("#mensaje").val();

	if(esAlfanumerico(nombre,'Nombre') && esEmail(email,'Email') && esTelefono(telefono,'Telefono') && noVacio(mensaje,'Mensaje'))
	{
		
	}
	else
	{
		e.preventDefault();
	}
}

/* ********* VALIDADORES *********** */
function esAlfanumerico(texto,campo)
{
	if(texto == '' || texto == null)
	{
		$('.mensaje-validacion').html('El campo "'+campo+'" es obligatorio.');
		return false;
	}

	var expresion = /^[a-zA-Z0-9 áéíóúñ]+$/;
	if(texto.match(expresion))
	{
		return true;
	}
	else
	{
		$('.mensaje-validacion').html('El valor del campo "'+campo+'" es inválido. Favor de corregirlo.');
		return false;
	}
}

function esTelefono(texto,campo)
{
	if(texto == '' || texto == null)
	{
		$('.mensaje-validacion').html('El campo "'+campo+'" es obligatorio.');
		return false;
	}

	var expresion = /^[0-9\-\(\) ]{7,14}$/;
	if(texto.match(expresion))
	{
		return true;
	}
	else
	{
		$('.mensaje-validacion').html('El valor del campo "'+campo+'" es inválido. Favor de corregirlo.');
		return false;
	}
}

function esEmail(texto,campo)
{
	if(texto == '' || texto == null)
	{
		$('.mensaje-validacion').html('El campo "'+campo+'" es obligatorio.');
		return false;
	}

	var expresion = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	if(texto.match(expresion))
	{
		return true;
	}
	else
	{
		$('.mensaje-validacion').html('El valor del campo "'+campo+'" es inválido. Favor de corregirlo.');
		return false;
	}
}

function noVacio(texto,campo)
{
	if(texto == '' || texto == null)
	{
		$('.mensaje-validacion').html('El campo "'+campo+'" es obligatorio.');
		return false;
	}

	return true;
}