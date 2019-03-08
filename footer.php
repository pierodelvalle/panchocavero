<?php wp_footer(); ?>
	<footer class="footer">
		<div class="container">
			<ul class="footer-info-list columns">
				<li class="column is-3">
					<h4>Locales y Contacto</h4>
					<p>Av. República de Panamá 6584, Barranco</p>
					<p><i class="fa fa-lg fa-whatsapp"></i> 998 195 193</p>
					<p>01 446 6179 | 01 637 5132</p>
					<br>
					<p>Av. Militar 2026, Lince</p>
					<p><i class="fa fa-lg fa-whatsapp"></i> 936 283 095</p>
					<p>01 517 6681</p>
				</li>
				<li class="column is-6">
					<h4>Horarios</h4>
					<h5>Barranco</h5>
					<p>Atención: Lunes a Domingo - 24 Horas</p>
					<h5>Lince</h5>
					<p>Atención: Lunes a Domingo - 8 a.m. - 8 p.m.</p>
				</li>
				<li class="column is-3"><img src="<?php echo get_template_directory_uri();?>/img/pancho-cavero-logo-B.png" alt="Pancho Cavero"></li>
			</ul>
		</div>
	</footer>
	<div class="footer-bottom">
		<div class="container">
			&copy; Studio 24
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/node_modules/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scripts.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/form.js"></script>
	<script>
		$('.filter-button').on( 'click', function(e) {
			e.preventDefault();
			filter = $(this);
			var request = filter.data("filter");

			filter.addClass('is-on');
			$('.filter-item').hide();
			$('.filter-item[data-category='+request+']').show();

		}).off('click', function(e){
			alert('bye bye!');
			e.preventDefault();
			filter = $(this);
			filter.removeClass('is-on');
			$('filter-item').show();
		})
	</script>
</body>
</html>