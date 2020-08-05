<div class="container">
	<div class="row">
		<h3 class="header-separador">Imagen de Fondo</h3>
		<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sistema/actualizarImagenOtros/fondo">	  	
		<div class="col-md-4 col-lg-4">
			<img src="<?= base_url() ?>resources/images/fondo.jpg" />
		</div>
		<div class="col-md-4 col-lg-4">
			<input type="file" name="fondo" class="form-control"/>
		</div>
		<div class="col-md-2 col-lg-2">
			<button type="submit" class="btn btn-block">Actualizar</button>
		</div>
		</form>
	</div>
	<div class="row">
		<h3 class="header-separador">Imagen de Encabezado</h3>
		<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sistema/actualizarImagenOtros/encabezado">	  	
		<div class="col-md-4 col-lg-4">
			<img src="<?= base_url() ?>resources/images/encabezado.jpg" />
		</div>
		<div class="col-md-4 col-lg-4">
			<input type="file" name="encabezado" class="form-control"/>
		</div>
		<div class="col-md-2 col-lg-2">
			<button type="submit" class="btn btn-block">Actualizar</button>
		</div>
		</form>
	</div>
</div>		