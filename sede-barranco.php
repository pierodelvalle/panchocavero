<?php 
/*
Template Name: Sede Barranco Template
*/
get_header(); ?>
<main class="main">
	<div class="main-slider hero is-medium" id="slider-sede" style="background-image: url(<?php echo get_template_directory_uri();?>/img/sede-barranco.jpg)">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-8">
						<h1 class="title">Sede Barranco</h1>
						<h4>Dirección</h4>
						<p>Av. República de Panamá 6584 - Barranco, Lima</p>
						<h4>Teléfonos</h4>
						<p><i class="fa fa-lg fa-whatsapp"></i> 998 195 193</p>
						<p>01 446 6179 | 01 637 5132</p>
						<h4>Email</h4>
						<p>atencion.cliente@panchocavero.com</p>
						<h4>Horarios</h4>
						<p>Atención: Lunes a Domingo - 24 Horas</p>
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
			$distrito = 'barranco';
			include 'templates/staff-grid-distrito.php' 
		 ?>
	</div>
	<a href="#" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
	<?php include 'templates/map.php' ?>
</main>
<?php get_footer(); ?>