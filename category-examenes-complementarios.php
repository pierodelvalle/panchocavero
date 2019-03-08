<?php 
/*
Template Name: Category Template
*/
get_header();?>
<main class="main">
		<div class="container">
			<h2 class>¿Qué ofrecemos?</h2>
			<ul class="main-servicios columns is-multiline is-mobile">
				<?php $query = new WP_Query( 
					array( 'category_name' => 'examenes-complementarios', 
						   'post_type' => 'servicio',
						   'posts_per_page' => -1,
						   'orderby' => 'title',
						   'order' => 'ASC' )); 
				?>
				<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<li class="main-servicios-item column is-one-third-desktop is-half-tablet is-full-mobile">
					<div class="columns is-mobile">
						<div class="column"><img src="<?php the_field('icono_principal') ?>" alt="Cardiología"></div>
						<div class="column is-three-quarters">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt() ?></p>
						</div>
					</div>
				</li>
				<?php endwhile; else: ?>
				<p><?php _e("Nothing here!"); ?></p>
				<?php endif ?>
			</ul>
		</div>
		<a href="/contacto" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
	</main>
<?php get_footer(); ?>