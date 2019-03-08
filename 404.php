<?php
header("HTTP/1.0 404 Not Found");
get_header(); ?>
<style>
	h2 {
		margin-bottom: 0px;
	}

	.container {
		padding-top: 30px;
		padding-bottom: 30px;
	}
</style>
<main>
	<div class="container" style="text-align: center;">
		<h2><?php _e( '¡Lo sentimos! Esa página no existe', 'pancho-cavero' ); ?></h2>
		<p>404 - Página no encontrada</p>
		<!--
		<div>
			<a href="/">Home</a>
			<a href="/nosotros">Nosotros</a>
			<a href="/servicios">Servicios</a>
			<a href="/contacto">Contacto</a>
		</div>
	-->
	</div>
</main>
<?php get_footer(); ?>