<?php get_header(); ?>
<main>
	<div class="container">
		<div class="content">
			<?php 
				$query = new WP_Query();
			 ?>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<div>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; else: ?>
			<p><?php _e("Nothing here!"); ?></p>
			<?php endif ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>