<div class="container">
	<div class="row">
		<h3 class="header-separador">Imagen de Contacto</h3>
		<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sistema/actualizarImagen/<?= str_replace('.jpg', '', $imagen->nombre) ?>/contacto">	  	
		<div class="col-md-4 col-lg-4">
			<img src="<?= base_url() ?>resources/images/contacto/<?= $imagen->nombre ?>" />
		</div>
		<div class="col-md-4 col-lg-4">
			<input type="file" name="file" class="form-control"/>
		</div>
		<div class="col-md-2 col-lg-2">
			<button type="submit" class="btn btn-block">Actualizar</button>
		</div>
		</form>
	</div>
	<div class="row">
		<h3 class="header-separador">Teléfono y Dirección</h3>
		<form method="post" action="<?= base_url() ?>sistema/actualizarTexto/telefono">
			<div class="col-md-2 col-lg-2">
				<input class="form-control" name="telefono" value="<?= $telefono ?>"/>
			</div>
			<div class="col-md-2 col-lg-2">
				<button type="submit" class="btn btn-block">Actualizar</button>
			</div>
		</form>
		<form method="post" action="<?= base_url() ?>sistema/actualizarTexto/direccion">
			<div class="col-md-5 col-lg-5">
				<input class="form-control" name="direccion" value="<?= $direccion ?>"/>
			</div>
			<div class="col-md-2 col-lg-2">
				<button type="submit" class="btn btn-block">Actualizar</button>
			</div>
		</form>
	</div>
</div>		