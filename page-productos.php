<?php get_header('inicio'); ?>

<div class="page__background">
	<div class="container color__content">
		
		<div class="content__admin">
			<div class="three columns">
				<ul class="ascensor">
					<img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt="">
					<li><a href="#ascensores">Ascensores</a>
						<ul>
							<li><a href="<?php echo home_url('/productos-int#electromecanicos') ?>">Electromecánicos</a></li>
							<li><a href="">Hidráulicos</a></li>
						</ul>
					</li>

					<li><a href="<?php echo home_url('/productos-int#discapacitados' ); ?>">Equipos para discapacitados</a>
						<ul>
							<li><a href="">Plataforma salva escaleras</a></li>
							<li><a href="">Plataforma elevadora</a></li>
						</ul>
					</li>

					<li><a href="">Montacargas</a></li>

					<li><a href="">Sistema para Vehículos</a>
						<ul>
							<li><a href="">Montacoches</a></li>
							<li><a href="">Sistemas de parqueo</a></li>
						</ul>
					</li>

					<li><a href="">Escaleras eléctricas y andenes móviles</a></li>
				</ul>
			</div>
			<div class="nine columns">

				<iframe src="<?php echo home_url('/productos-int' ); ?>" width="100%" height="600" scrolling="auto" frameborder="0"></iframe>
				
			</div>
		</div>

		
	</div>

	
</div>

<?php get_footer(); ?>