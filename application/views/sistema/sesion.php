<div class="container">
    <div class="row">
    	<h3 class="header-separador">Inicio de Sesión</h3>
    	<form method="post" action="<?= base_url() ?>sistema/iniciar">
    	<div class="col-md-2">
    		<input class="form-control" name="usuario" placeholder="Usuario..."/>
    	</div>
    	<div class="col-md-2">
    		<input class="form-control" type="password" name="password" placeholder="Contraseña..."/>
    	</div>
    	<div class="col-md-2">
    		<input class="form-control btn btn-primary" type="submit" value="Iniciar"/>
    	</div>
    	</form>
    </div>
</div>	