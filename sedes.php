<?php 
/*
Template Name: Sedes Template
*/
get_header(); ?>
<main class="main">
	<div class="main-slider hero is-medium" id="slider-sede">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-8">
						<h1 class="title">Sede Barranco</h1>
						<h4>Dirección</h4>
						<p>Av. República de Panamá 6584 - Barranco, Lima</p>
						<h4>Teléfonos</h4>
						(01) 466 5042
						<h4>Email</h4>
						<p>atencion.cliente@panchocavero.com</p>
						<h4>Horarios</h4>
						<p>Lunes a Viernes 8:00 a.m. - 8:00 p.m.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 class>¿Qué ofrecemos?</h2>
		<ul class="main-servicios columns is-multiline">
			<?php 
				$args = array('post_type' => 'servicio', 'posts_per_page' => 9, 'category_name' => "especialidades");
				$query = new WP_Query($args);
			 ?>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			<li class="main-servicios-item column is-4">
				<div class="columns">
					<div class="column"><img src="<?php the_field('icono_principal') ?>" alt="Cardiología"></div>
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
	</div>
	<div class="main-contacto-cta"><h1 class="title">Nuestro Equipo</h1></div>
	<div class="container">
		<ul class="main-grid columns is-multiline">
			<?php 
				$args = array('post_type' => 'staff', 'posts_per_page' => -1);
				$query_staff = new WP_Query($args);
			 ?>
			<?php if ($query_staff->have_posts()) : while ($query_staff->have_posts()) : $query_staff->the_post(); ?>
			<li class="column is-3">
				<div class="main-grid-item">
					<div class="main-grid-item-overlay">
						<h5><?php the_title(); ?></h5>
						<p>Sede Barranco</p>
					</div>
				</div>
			</li>
			<?php endwhile; else: ?>
			<p><?php _e("Nothing here!"); ?></p>
			<?php endif ?>
		</ul>
	</div>
	<a href="#" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
	<div class="main-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d62417.927572229295!2d-77.05555673386374!3d-12.103904190335616!3m2!1i1024!2i768!4f13.1!2m1!1spancho+cavero+veterinaria!5e0!3m2!1ses-419!2spe!4v1535470003933" width="1440" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</main>
<?php get_footer(); ?>