<?php 
/*
Template Name: Single Producto Template
*/
get_header();?>
<style>
	.main-section .columns .column p {
		margin-bottom: 20px;
	}
</style>
<main class="main">
	<div class="main-section">
		<div class="container">
			<?php if (have_posts()): while(have_posts()): the_post(); ?>
			<div class="columns">
				<div class="column">
					<h1 class="title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
				<div class="column is-5">
					<div class="main-paragraph-img" style="background-image: url(<?php the_field('imagen_principal') ?>)"></div>
				</div>
			</div>
			<?php endwhile; else: ?>
			<p><?php _e("Lo sentimos. No hay publicaciones por aquí."); ?></p>
			<?php endif ?>
		</div>
	</div>
	<a href="/contacto" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
	</main>
<?php get_footer(); ?>