		<footer>
			<section class="contenido">
				<section>Alex Romero. Todos los derechos reservados.</section>
				<section>Diseño: <a href="http://develcrew.com" rel="nofollow" title="Empresa Desarrollo Web">DevelCrew.com</a></section>
			</section>
		</footer>
		<script type="text/javascript" src="<?= base_url() ?>resources/js/jquery-1.10.1.min.js"></script>
		<?php  if($header == 'galeria') { ?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		<?php } ?>
		<script type="text/javascript" src="<?= base_url() ?>resources/js/script.js"></script>
		<?php  if($header == 'inicio') { ?>
		<script type="text/javascript" src="<?= base_url() ?>resources/js/dc-slider.js"></script>
		<?php } ?>
		<?php  if($header == 'contacto') { ?>
		<script type="text/javascript" src="<?= base_url() ?>resources/js/validaciones.js"></script>
		<?php } ?>
	</body>
</html>