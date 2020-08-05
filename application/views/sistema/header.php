<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Gestor de Contenidos | Alex Romero</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/css/styles-sistema.css" />
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Gestor de Contenido</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      <li class="<?= $actual[0] ?>"><a href="<?= base_url() ?>sistema/inicio/">Inicio</a></li>
			      <li class="<?= $actual[1] ?>"><a href="<?= base_url() ?>sistema/galeria/">Galería</a></li>
			      <li class="<?= $actual[2] ?>"><a href="<?= base_url() ?>sistema/contacto/">Contacto</a></li>
			      <li class="<?= $actual[3] ?>"><a href="<?= base_url() ?>sistema/otros/">Otros</a></li>
			    </ul>
			    <p class="navbar-text pull-right"><strong>DevelCrew</strong></p>
			</div>
		</nav>