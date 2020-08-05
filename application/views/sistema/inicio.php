<div class="container">
	<div class="row">
		<h3 class="header-separador">Mensaje de Inicio</h3>	  	
		<form method="post" action="<?= base_url() ?>sistema/actualizarMensaje">
		<div class="col-md-6 col-lg-6">
			<textarea class="form-control" rows="8" name="mensaje"><?= $texto ?></textarea>
		</div>
		<div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2">
			<button type="submit" class="btn btn-block">Actualizar</button>
		</div>
	</div>
	<div class="row">
		<h3 class="header-separador">Imágenes de Inicio</h3>	  	
		<?php
			foreach ($imagenes as $imagen) {
		?>
		<div class="row">
			<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sistema/actualizarImagen/<?= str_replace('.jpg', '', $imagen->nombre) ?>/inicio">
			<div class="col-md-4 col-lg-4">
					<img src="<?= base_url() ?>resources/images/inicio/<?= $imagen->nombre ?>" />
			</div>
			<div class="col-md-4 col-lg-4">
				<input type="file" name="file" class="form-control"/>
			</div>
			<div class="col-md-2 col-lg-2">
				<button class="btn btn-block">Actualizar</button>
			</div>
			</form>
			<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sistema/borrarImagen/<?= str_replace('.jpg', '', $imagen->nombre) ?>/inicio">
			<?php if(count($imagenes) > 1) { ?>
			<div class="col-md-2 col-lg-2">
				<button class="btn btn-block btn-danger">Borrar</button>
			</div>
			<?php } ?>
			</form>
		</div>
		<?php
			}
		?>
	</div>
	<div class="row">
		<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sistema/agregarImagen/inicio">
		<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
			<input type="file" name="file" class="form-control"/>
		</div>
		<div class="col-md-2 col-lg-2 col-md-offset-1 col-lg-offset-1">
			<button class="btn btn-block btn-success">Añadir Imagen</button>
		</div>
		</form>
	</div>
</div>		