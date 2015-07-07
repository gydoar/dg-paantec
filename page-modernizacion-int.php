<?php
/*
 * Template Name: Page Modernizacion interna 
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
					<li><a href="<?php echo home_url('/modernizacion-int/por-que-modernizar/' ); ?>">Modernizar tu ascensor</a></li>

					<li><a href="<?php echo home_url('/modernizacion-int/ubicacion-de-elementos/' ); ?>">Ubicación de elementos</a></li>

					<li><a href="<?php echo home_url('/midernizacion-int/modernizacion-de-control-electrico' ); ?>">Modernización de Control Eléctrico</a></li>

					<li><a href="<?php echo home_url('/modernizacion-int/resultados-visibles/' ); ?>">Resultados visibles</a></li>

					<li><a href="<?php echo home_url('modernizacion-int/modernizar-la-cabina-del-ascensor/') ?>">Modernizar la cabina del ascensor</a></li>

					<li><a href="<?php echo home_url('/modernizacion-int/remodelacion-de-cabina/' ); ?>">Remodelación de Cabina</a></li>

					<li><a href="<?php echo home_url('/modernizacion-int/elementos-de-seguridad-a-actulizar/' ); ?>">Elementos de seguridad a actualizar</a></li>

					<li><a href="<?php echo home_url('/modernizacion-int/actualizacion-de-elementos-de-seguridad/' ); ?>">Actualización de elementos de seguridad</a></li>

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