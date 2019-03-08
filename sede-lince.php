<?php 
/*
Template Name: Sede Lince Template
*/
get_header(); ?>
<main class="main">
	<div class="main-slider hero is-medium" id="slider-sede" style="background-image: url(<?php echo get_template_directory_uri();?>/img/sede-lince.jpg)">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-8">
						<h1 class="title">Sede Lince</h1>
						<h4>Dirección</h4>
						<p>Av. Militar 2026, Lince</p>
						<h4>Teléfonos</h4>
						<p><i class="fa fa-lg fa-whatsapp"></i> 936 283 095</p>
						<p>01 517 6681</p>
						<h4>Horarios</h4>
						<p>Atención: Lunes a Domingo - 8 a.m. - 8 p.m.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php include 'templates/servicios-preview.php' ?>
	</div>
<div class="main-contacto-cta"><h1 class="title">Nuestro Equipo</h1></div>
	<div class="container">
		<?php
			$distrito = 'lince';
			include 'templates/staff-grid-distrito.php' 
		 ?>
	</div>
	<a href="#" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
	<?php include 'templates/map.php' ?>
</main>
<?php get_footer(); ?>