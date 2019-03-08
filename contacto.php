<?php 
/*
Template Name: Contacto Template
*/
get_header(); ?>
<main class="main">
<div class="main-contact">
	<div class="container">
		<div class="columns">
			<div class="column is-6">
				<div class="main-section">
					<h1 class="title">¡Envíanos un mensaje!</h1>
					<form action="<?php echo get_template_directory_uri();?>/enviar.php" id="main-form">
						<div class="field">
							<input class="input" type="text" name="name" placeholder="Nombre">
						</div>
						<div class="field">
							<input class="input" type="text" name="phone" placeholder="Teléfono">								
						</div>
						<div class="field">
							<input class="input" type="text" name="email" placeholder="Email">								
						</div>
						<div class="select field" style="width: 100%">
							<select class="input" name="location">
								<option value="barranco">Sede Barranco</option>
								<option value="lince">Sede Lince</option>
							</select>								
						</div>
						<div class="field">
							<textarea style="height: 130px" class="input" name="message" placeholder="Mensaje"></textarea>								
						</div>
						<input id="submit-form" class="button is-primary" type="submit">
					</form>
				</div>
			</div>
			<div class="column is-6">
				<div class="main-black">
					<h4>Sede Barranco</h4>
					<p>Av. República de Panamá 6584 Barranco </p>
					<p><i class="fa fa-lg fa-whatsapp"></i> 998 195 193</p>
					<p>01 446 6179 | 01 637 5132</p>

					<h4>Sede Lince</h4>
					<p>Av. Militar 2026 Lince</p>
					<p><i class="fa fa-lg fa-whatsapp"></i> 936 283 176</p>
					<p>01 517 6681</p>
					
					<h4>Horarios</h4>
					<h5>Barranco</h5>
					<p>Atención: Lunes a Domingo - 24 Horas</p>
					<h5>Lince</h5>
					<p>Atención: Lunes a Domingo - 8 a.m. - 8 p.m.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d62417.927572229295!2d-77.05555673386374!3d-12.103904190335616!3m2!1i1024!2i768!4f13.1!2m1!1spancho+cavero+veterinaria!5e0!3m2!1ses-419!2spe!4v1535470003933" width="1440" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</main>
<?php get_footer(); ?>