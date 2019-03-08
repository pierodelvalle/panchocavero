<?php 
/*
Template Name: Category Template
*/
get_header();?>
<main class="main">
		<div class="container">
			<h2 class>¿Qué ofrecemos?</h2>
			<ul class="main-servicios columns is-multiline">
				<?php $query = new WP_Query('post_type=servicio'); ?>
				<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<li class="main-servicios-item column is-4">
					<div class="columns">
						<div class="column"><img src="<?php the_field('icono') ?>" alt="Cardiología"></div>
						<div class="column is-three-quarters">
							<h3><a href="servicio-solo.html"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt() ?></p>
						</div>
					</div>
				</li>
				<?php endwhile; else: ?>
				<p><?php _e("Nothing here!"); ?></p>
				<?php endif ?>
				aeiou aeiou
			</ul>
			<div class="buttons is-centered" id="seemore-btn">
				<a href="" class="button is-primary">Ver más</a>	
			</div>
		</div>
		<a href="/contacto" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
	</main>
<?php get_footer(); ?>