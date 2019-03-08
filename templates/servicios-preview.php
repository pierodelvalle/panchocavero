<h2 class>¿Qué ofrecemos?</h2>
<ul class="main-servicios columns is-multiline is-centered">
	<?php 
		$args = array('post_type' => 'servicio', 'posts_per_page' => 9, 'category_name' => "especialidades", 'orderby' => 'title', 'order' => 'ASC');
		$query = new WP_Query($args);
	 ?>
	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
	<li class="main-servicios-item column is-one-third-desktop is-half-tablet is-full-mobile">
		<div class="columns is-mobile">
			<div class="column"><img src="<?php the_field('icono_principal') ?>" alt="<?php the_title(); ?>"></div>
			<div class="column is-three-quarters">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<!--<p class="location">Sede Barranco</p>-->
				<?php the_excerpt(); ?>
			</div>
		</div>
	</li>
	<?php endwhile; else: ?>
	<p><?php _e("Nothing here!"); ?></p>
	<?php endif ?>
</ul>
<div class="buttons is-centered" id="seemore-btn">
	<a href="/servicios" class="button is-primary">Ver más</a>	
</div>