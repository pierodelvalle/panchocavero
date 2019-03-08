<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>Clínica Veterinaria Pancho Cavero</title>
	<!-- Place this data between the <head> tags of your website -->
	<title>Pancho Cavero</title>
	<meta name="description" content="Somos una clínica veterinaria multidisciplinaria que ofrece diferentes especialidades, conformado por un staff de 15 médicos veterinarios, liderados por el Dr. Pancho Cavero, en Barranco y Lince." />
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="Pancho Cavero">
	<!-- Open Graph data -->
	<meta property="og:title" content="Pancho Cavero" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.panchocavero.com/" />
	<meta property="og:image" content="http://panchocavero.com/wp-content/themes/pancho_cavero/img/pancho-cavero-logo-N.png" />
	<meta property="og:description" content="Somos una clínica veterinaria multidisciplinaria que ofrece diferentes especialidades, conformado por un staff de 15 médicos veterinarios, liderados por el Dr. Pancho Cavero, en Barranco y Lince." />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicon.png">
	<!-- Make-responsive tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Load resources -->
	<?php wp_head();?>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
	<!-- (c) Piero del Valle 2018-->
</head>
<body>
	<header class="header">
		<div class="header-locales">
			<div class="container">
				<ul class="header-locales-list level">
					<li class="column is-5"><a href="/"><img src="<?php echo get_template_directory_uri();?>/img/pancho-cavero-logo-N.png" alt="Pancho Cavero"></a></li>
					<li class="column no-tablet">
						<a href="/sede-barranco">
							<h4 class="title is-5">Sede Barranco</h4>
						<!--<p>Av. República de Panamá 6584 Barranco</p>
							<p>Whatsapp: 998 195 193</p>
							<p>01 446 6179 | 01 637 5132</p> -->
						</a>
						<!--ul class="header-social-list">
							<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
						</ul> -->
					</li>
					<li class="column no-tablet">
						<a href="/sede-lince">
							<h4 class="title is-5">Sede Lince</h4>
						<!--<p>Av. Militar 2026 Lince</p>
							<p>Whatsapp: 936 283 176</p>
							<p>01 517 6681</p> -->
						</a>
						<!--ul class="header-social-list">
							<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
						</ul>	 -->	
					</li>
					<li class="column no-tablet">
						<a href="#/">
							<h4 class="title is-5 is-disabled">Sede San Juan de Miraflores</h4>
							<p class="subtitle has-text-grey is-italic">Próximamente</p>
						<!--<p>Av. Militar 2026 Lince</p>
							<p>Whatsapp: 936 283 176</p>
							<p>01 517 6681</p> -->
						</a>
						<!--ul class="header-social-list">
							<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
						</ul>	 -->	
					</li>
				</ul>
			</div>
		</div>
		<div class="header-menu" id="header-menu">
			<div id="toggle-menu">
				<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/toggle-menu.png" alt="Menú"></a>
			</div>
			<div id="main-nav">
			<?php wp_nav_menu() ?>
			</div>
		</div>
	</header>