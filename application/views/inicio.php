<section id="htmlInicio" class="body inicio">
	<section class="barra">
		<section class="contenido dc-slider">
			<section class="img-inicio">
				<?php
					foreach ($imagenes as $imagen) {
				?>
					<img src="<?= base_url() ?>resources/images/inicio/<?= $imagen->nombre ?>" />
				<?php
					}
				?>
			</section>
			<section class="texto">
				<h2>Alex Romero</h2>
				<?= $texto ?>
			</section>
		</section>
	</section>
</section>
		