<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Fotógrafo Alex Romero</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/css/styles.css" />
		<?php if($header == 'galeria') { ?>
		<link type="text/css" rel="stylesheet" href="<?= base_url() ?>resources/lightbox/css/style3.css" />
		<?php } ?>
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<header class="<?= $header ?>">
			<section class="banner-superior">
				<img src="<?= base_url() ?>resources/images/encabezado.jpg" alt="banner">
			</section>
			<nav class="menu">
				<img src="<?= base_url() ?>resources/images/loader.gif" alt="loader"/>
				<ul>
					<li><a href="<?= base_url() ?>contacto/" id="contacto">CONTACTO</a></li>
					<li><a href="<?= base_url() ?>galeria/" id="galeria">GALERIA</a></li>
					<li><a href="<?= base_url() ?>" id="inicio">INICIO</a></li>
				</ul>
			</nav>
		</header>