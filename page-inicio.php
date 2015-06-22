<?php get_header('inicio'); ?>

<div class="page__background">
	<div class="container color__content">
		
		<div class="content__admin container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
				<?php the_content(); ?>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			<ul class="buttom_inicio">
				<li><a class="fancybox" href="#mision"><img src="<?php bloginfo('template_url' ); ?>/library/img/botones/mision.png" alt=""></a></li>
				<li><a class="fancybox" href="#vision"><img src="<?php bloginfo('template_url' ); ?>/library/img/botones/vision.png" alt=""></a></li>
				<li><a class="fancybox" href="#objetivos"><img src="<?php bloginfo('template_url' ); ?>/library/img/botones/objetivos.png" alt=""></a></li>
			</ul>
			<!-- Mision -->
			<div class="container popup_inicio" id="mision">
				<div class="eight columns">
					<h3>Misión</h3>
					<p>
						<?php echo of_get_option('txt_mision'); ?>
					</p>
				</div>
				<div class="four columns">
					<img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/mision_foto.jpg" alt="">
				</div>
				
			</div>

			<!-- Vision -->
			<div class="container popup_inicio" id="vision">
				<div class="eight columns">
					<h3>Visión</h3>
					<p>
						<?php echo of_get_option('txt_vision'); ?>
					</p>
				</div>
				<div class="four columns">
					<img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/vision_foto.jpg" alt="">
				</div>
				
			</div>

			<!-- Objetivos -->
			<div class="container popup_inicio" id="objetivos">
				<div class="">
					<h3>Objetivos</h3>
					<p>
						<?php echo of_get_option('txt_objetivos'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	
</div>
<?php get_footer(); ?>