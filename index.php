<?php get_header(); ?>
	<main class="main">
		<div class="hero is-medium" id="slider-inicio">
			<div class="slick-carousel-main">
				<div><img src="<?php echo get_template_directory_uri();?>/img/carousel-1.jpg" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri();?>/img/carousel-2.jpg" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri();?>/img/carousel-3.jpg" alt=""></div>
			</div>
		</div>
		<div class="container">
			<?php include 'templates/servicios-preview.php' ?>
		</div>
		<?php include 'templates/square-menu.php' ?>
		<a href="/contacto" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
		<?php include 'templates/map.php' ?>
	</main>
<?php get_footer(); ?>