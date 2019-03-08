<ul class="main-grid columns is-multiline">
	<?php 
	$args = array('post_type' => 'staff', 'posts_per_page' => -1, 'category_name' => $distrito);
		$query_staff = new WP_Query($args);
	 ?>
	<?php if ($query_staff->have_posts()) : while ($query_staff->have_posts()) : $query_staff->the_post(); ?>
	<li class="column is-3">
		<div class="main-grid-item">
			<div class="main-grid-item-image" style="background-image: url(<?php the_field('imagen_staff')?>);">
			</div>
			<div class="main-grid-item-text">
				<h5><?php the_title(); ?></h5>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</li>
	<?php endwhile; else: ?>
	<p><?php _e("Nothing here!"); ?></p>
	<?php endif ?>
</ul>