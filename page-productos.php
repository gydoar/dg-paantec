<?php get_header('inicio'); ?>

<div class="page__background">
	<div class="container color__content">
		
		<div class="content__admin">
			<div class="three columns">
				<ul class="ascensor">
					<img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt="">
					<li><a href="#ascensores">Ascensores</a></li>

					<li><a href="<?php echo home_url('/productos-int#discapacitados' ); ?>">Equipos para discapacitados</a></li>

					<li><a href="">Montacargas</a></li>

					<li><a href="">Sistema para Vehículos</a></li>

					<li><a href="">Escaleras eléctricas y andenes móviles</a></li>

					<a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/btn-top.png" alt=""></a>
				</ul>
			</div>
			<div class="nine columns">

				<iframe src="<?php echo home_url('/productos-int' ); ?>" width="100%" height="600" scrolling="auto" frameborder="0"></iframe>
				
			</div>
		</div>

		
	</div>

	
</div>

<?php get_footer(); ?>