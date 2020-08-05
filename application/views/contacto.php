<section id="htmlContacto" class="body contacto">
	<section class="barra">
		<section class="contenido">
			<section class="formulario">
				<span class="mensaje-validacion"><?= (isset($mensajeVal))? $mensajeVal : ''; ?></span>
				<form method="post" action="<?= base_url() ?>contacto/enviarCorreo">
					<section class="dato">
						<section>Nombre <small>|</small></section>
						<input id="nombre" name="nombre" />
					</section>
					<section class="dato">
						<section>Email <small>|</small></section>
						<input id="email" name="email" />
					</section>
					<section class="dato">
						<section>Teléfono <small>|</small></section>
						<input id="telefono" name="telefono" />
					</section>
					<section class="dato">
						<section>Mensaje <small>|</small></section>
						<textarea rows="6" id="mensaje" name="mensaje"></textarea>
					</section>
					<section class="dato">
						<input type="submit" value="Enviar"/>
					</section>
				</form>	
			</section>
			<img src="<?= base_url() ?>resources/images/contacto/<?= $imagenes[0]->nombre ?>" alt="contacto"/>
			<section class="mensaje">
				<h3>¡Gracias por contactarme!</h3>
				<div>
					<span>Dirección: <?= $direccion ?></span>
				</div>
				<div>
					<span>Teléfono: <?= $telefono ?></span>
				</div>
				<a href="https://www.facebook.com/profile.php?id=679870805&fref=ts"><img src="<?= base_url() ?>resources/images/sociales/facebook.png" alt="facebook"/></a>
				<a href="http://www.twitter.com/AlexRomora"><img src="<?= base_url() ?>resources/images/sociales/twitter.png" alt="twitter"/></a>
			</section>
		</section>
	</section>
</section>
		