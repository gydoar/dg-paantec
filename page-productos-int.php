<?php
/*
 * Template Name: Page Productos interna 
 * Description: A Page Template with a darker design.
 */

?>

<?php get_header('inicio'); ?>

<div class="page__background">
	<div class="container color__content">
		
		<div class="content__admin">
			<div class="three columns">
				<ul class="ascensor">
					<img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt="">
					<br><br>
					<li><a href="<?php echo home_url('/productos-int/ascensores' ); ?>">Ascensores</a>
						<ul>
							<li><a href="<?php echo home_url('/productos-int#electromecanicos') ?>">Electromecánicos</a></li>
							<li><a href="">Hidráulicos</a></li>
						</ul>
					</li>

					<li><a href="<?php echo home_url('/productos-int/equipos-para-discapacitados/' ); ?>">Equipos para discapacitados</a>
						<ul>
							<li><a href="">Plataforma salva escaleras</a></li>
							<li><a href="">Plataforma elevadora</a></li>
						</ul>
					</li>

					<li><a href="<?php echo home_url('/productos-int/montacargas/' ); ?>">Montacargas</a></li>

					<li><a href="<?php echo home_url('/productos-int/sistemas-para-vehiculos/' ); ?>">Sistema para Vehículos</a>
						<ul>
							<li><a href="">Montacoches</a></li>
							<li><a href="">Sistemas de parqueo</a></li>
						</ul>
					</li>

					<li><a href="<?php echo home_url('/productos-int/escaleras-electricas-y-andenes-moviles' ); ?>">Escaleras eléctricas y andenes móviles</a></li>

				</ul>
			</div>
			<div class="nine columns">

				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h4><?php the_title(); ?></h4>

					<?php the_content(); ?>

				 <?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				 <?php endif; ?>
				
			</div>
		</div>

		
	</div>

	
</div>

<?php get_footer(); ?>