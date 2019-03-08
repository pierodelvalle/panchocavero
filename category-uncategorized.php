<?php get_header(); ?>
<main>
	<div class="hero is-medium" id="slider-nosotros">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">Blog</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="blogpost-space"></div>
		<div class="columns">
			<div class="column is-8 is-offset-2">
				<div class="content">
					<?php 
						$args = array(
						    'post_type' => 'post'
						);
						$query = new WP_Query($args);
					 ?>
					<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
						<div class="blogpost">
							<div class="box">
								<h1 class="blogpost-title"><?php the_title(); ?></h1>
								<span class="blogpost-time"><?php the_time('F j, Y'); ?></span>
								<p class="blogpost-content"><?php the_content(); ?></p>
							</div>
						</div>
					<?php endwhile; else: ?>
					<p><?php _e("Nothing here!"); ?></p>
					<?php endif ?>
				</div>
			</div>
			<div class="column is-offset-1 is-4" style="display: none;">
				<div class="sidebar-wrapper">
					<div class="sidebar-img"></div>
					<div class="sidebar">
						<div class="sidebar-title">Pancho Cavero</div>
						<div class="sidebar-desc">Médico Veterinario</div>
						<p>Médico Veterinario egresado de la Universidad Nacional Mayor de San Marcos, líder de opinión en temas de Neurología, traumatología y Ortopedia Veterinaria. Comunicador y activista en pro del bienestar de los animales y promotor de la conservación de la biodiversidad del medio ambiente.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>