<?php get_header(); ?>
<main>
	<div class="container">
	<div class="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1 style="color: black !important; margin-top: 30px"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Something went wrong.' ); ?></p>
	<?php endif; ?>
	</div>
	<div class="bottom-item" style="margin-bottom: 60px"></div>
	</div>
</main>
<?php get_footer(); ?>