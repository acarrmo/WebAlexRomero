<div class="container">
	<h3 class="header-separador">Imágenes de Galería</h3>	
	<?php
		foreach ($imagenes as $imagen) {
	?>
	<div class="row">
		<form method="post" id="form<?= $imagen->nombre ?>act" enctype="multipart/form-data" action="<?= base_url() ?>sistema/actualizarImagenGaleria/<?= str_replace('.jpg', '', $imagen->nombre) ?>">
		<div class="col-md-2 col-lg-2">
			<img src="<?= base_url() ?>resources/lightbox/images/full/<?= $imagen->nombre ?>" />
		</div>
		<div class="col-md-2 col-lg-2">
			<input type="file" name="full" class="form-control"/>
		</div>
		<div class="col-md-1 col-lg-1">
			<img src="<?= base_url() ?>resources/lightbox/images/thumbs/<?= $imagen->nombre ?>" />
		</div>
		<div class="col-md-2 col-lg-2">
			<input type="file" name="thumb" class="form-control"/>
		</div>
		<div class="col-md-2 col-lg-2">
			<p>Titulo</p>
			<input class="form-control" name="titulo" value="<?= $imagen->titulo ?>"/>
			<p>Descripción</p>
			<textarea class="form-control" name="descripcion" rows="3"><?= $imagen->descripcion ?></textarea>
		</div>
		</form>
		<form method="post" id="form<?= $imagen->nombre ?>bor" action="<?= base_url() ?>sistema/borrarImagen/<?= str_replace('.jpg', '', $imagen->nombre) ?>/galeria">
		<div class="col-md-2 col-lg-2">
			<button class="btn btn-block" form="form<?= $imagen->nombre ?>act">Actualizar</button>
			<?php if(count($imagenes) > 1) {?><button class="btn btn-block btn-danger" form="form<?= $imagen->nombre ?>bor">Borrar</button><?php } ?>
		</div>
		</form>
	</div>
	<hr/>
	<?php
		}
	?>
	
	<div class="row">
		<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sistema/agregarImagenGaleria/">
		<div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2">
			<input type="file" name="full" class="form-control"/>
		</div>
		<div class="col-md-2 col-lg-2 col-md-offset-1 col-lg-offset-1">
			<input type="file" name="thumb" class="form-control"/>
		</div>
		<div class="col-md-2 col-lg-2 col-md-offset-1 col-lg-offset-1">
			<button type="submit" class="btn btn-block btn-success">Añadir Imagen</button>
		</div>
		</form>
	</div>
</div>		