<section class="body galeria">
	<section class="barra">
		<section class="contenido">
			<section>
				<ul class="lb-album">
					<?php 
						$actual = 1;
						$total = count($imagenes);
						foreach ($imagenes as $imagen) {
					?>
						<li>
							<a href="#image-<?= $actual ?>">
								<img src="<?= base_url() ?>resources/lightbox/images/thumbs/<?= $imagen->nombre ?>" alt="image <?= $actual ?>">
								<span><?= $imagen->titulo ?></span>
							</a>
							<div class="lb-overlay" id="image-<?= $actual ?>">
								<img src="<?= base_url() ?>resources/lightbox/images/full/<?= $imagen->nombre ?>" alt="image <?= $actual ?>" />
								<div>
									<h3><?= $imagen->titulo ?></h3>
									<p><?= $imagen->descripcion ?></p>
									<a href="#image-<?= ($actual == 1)? $total : $actual-1; ?>" class="lb-prev">Anterior</a>
									<a href="#image-<?= ($actual == $total)? 1 : $actual+1; ?>" class="lb-next">Siguiente</a>
								</div>
								<a href="#page" class="lb-close">x Close</a>
							</div>
						</li>
					<?php
						$actual++;
						}
					?>
				</ul>
			</section>
		</section>
	</section>
</section>