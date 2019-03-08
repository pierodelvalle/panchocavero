<?php 
/*
Template Name: About Template
*/
get_header(); ?>
<main class="main">
	<div class="main-slider hero is-medium" id="slider-nosotros">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-8">
						<h1 class="title">Nosotros</h1>
						<p>La Clínica Veterinaria Pancho Cavero (antes llamada Hospital veterinario ELBAS) inició sus actividades el 01 de Octubre del 2004, por los socios fundadores, el Dr. Pancho Cavero y la Dra. Fiorella Cochella, ambos Médicos Veterinarios orientados hacia el bienestar animal, que decidieron ofrecer una propuesta médica innovadora, integral y de calidad.</p>
						<p>Desde su fundación, fue conocida por el desarrollo de nuevas técnicas y herramientas quirúrgicas y de rehabilitación, que permitió ser una Clínica Veterinaria referente en el País y diferenciarse con propuestas innovadoras en el mercado Veterinario. Inicialmente dedicada al desarrollo y elaboración de instrumentos e implantes para Ortopedia Veterinaria, así como de innovadoras creaciones, como fue la silla de ruedas para mascotas, que permite realizar una adecuada rehabilitación de casos con buen pronóstico de resolución y en casos de mal pronóstico, sirve como instrumento de movilización del paciente, aportando calidad de vida.</p>
						<p>Actualmente, es una Clínica Veterinaria multidisciplinaria que ofrece diferentes especialidades, conformado por un staff de 15 Médicos Veterinarios, liderados por el Dr. Pancho Cavero, en las sedes de Barranco y Lince, ofreciendo servicios médicos de calidad con el uso de equipos médicos de última generación.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-paragraph">
		<div class="container">
			<div class="columns">
				<div class="col-no-mobile column is-5">
					<div style="background-image: url(<?php echo get_template_directory_uri();?>/img/foto-pancho.jpg);" class="main-paragraph-img img-left"></div>
				</div>
				<div class="column">
					<div class="main-paragraph-wrapper">
						<div class="main-paragraph-text">
							<h4>Dr. Pancho Cavero</h4>
							<p>Médico Veterinario egresado de la Universidad Nacional Mayor de San Marcos, líder de opinión en temas de Neurología, traumatología y Ortopedia Veterinaria, Diplomado de Traumatología y Ortopedia en CEAMVET-México y realizó una pasantía en la Clínica San Juan de Dios, 2007. Expositor de innumerables Congresos de Medicina Veterinaria y como Infuencer en temas relacionados a los animales y el medio ambiente. Condecorado en el 2011 por la UNMSM, por su contribución en el desarrollo de la Medicina Veterinaria en el Perú y Medalla Cívica de la orden Santiago de Apóstol en “Reconocimiento al desarrollo de técnicas y procedimientos innovadores en el ejercicio de la Medicina Veterinaria” por la Municipalidad de Santiago de Surco 2005</p>
							<br>
							<p>Comunicador y activista en pro del bienestar de los animales y promotor de la conservación de la biodiversidad del medio ambiente. Columnista del Diario el Trome, Bloguero, Autor del libro de consulta “Veterinario en casa” por editorial Planeta, conductor del programa radial “Veterinaria Capital” por Radio Capital,  conductor y productor del Programa “Los Animales me Importan”, emitido por Frecuencia Latina. </p>
							<br>
							<p>En el 2015 y por 3 temporadas, condujo y co-produjo el programa semanal “Dr. Vet” por América Televisión. En el 2013 co-condujo el programa de radio “Naturaleza Animal por Radio San Borja y en el 2009 condujo la secuencia de “entre patas al rescate” en el Magazine “Hola a Todos”, transmitido por ATV. </p>
						</div>
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="main-paragraph-wrapper">
						<div class="main-paragraph-text">
							<h4>Dra. Fiorella Cochella</h4>
							<p>Médico Veterinario egresada de la Universidad Nacional Mayor de San Marcos y Master en Administración de Negocios (MBA). Se desempeñó como Gerente de Línea en reconocidas empresas del medio veterinario por 12 años, adquiriendo amplia experiencia en el sector de animales de compañía y avicultura. Es Socia Co-Fundadora y actualmente Gerente de Operaciones de la Clínica Veterinaria Pancho Cavero de las Sedes de Barranco y Lince, así como asesora de Marketing en el sector veterinario.</p>
						</div>
					</div>
				</div>
				<div class="col-no-mobile column is-6 is-offset-1">
					<div style="background-image: url(<?php echo get_template_directory_uri();?>/img/foto-veterinaria.jpg);" class="main-paragraph-img img-right"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-contacto-cta"><h1 class="title">Nuestro Equipo</h1></div>
	<div class="container">
		<div class="main-button-row columns">
			<a href="#" class="column filter-button" id="filter-barranco" data-filter="Barranco">
				<div class="main-button-item">
				Sede Barranco	
				</div>
			</a>
			<a href="#" class="column filter-button" id="filter-lince" data-filter="Lince">
				<div class="main-button-item">
				Sede Lince	
				</div>
			</a>
		</div>
		<ul class="main-grid columns is-multiline is-mobile" id="filter-box">
			<?php 
				$args = array('post_type' => 'staff', 'posts_per_page' => -1);
				$query_staff = new WP_Query($args);
			 ?>
			<?php if ($query_staff->have_posts()) : while ($query_staff->have_posts()) : $query_staff->the_post(); ?>
			<li data-category='<?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?>' class="filter-item column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
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
	</div>
	<a href="/contacto" class="main-contacto-cta"><h1 class="title">¡Ponte en contacto con nosotros!</h1></a>
</main>
<?php get_footer(); ?>