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
			<div class="three columns float">
				<ul class="ascensor">
					<img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt="">
					<br><br>
					<!-- <li><a href="<?php echo home_url('/modernizacion-int/por-que-modernizar/' ); ?>">Modernizar tu ascensor</a></li> -->

					<li><a href="<?php echo home_url('/modernizacion-int/ubicacion-de-elementos/' ); ?>">Ubicación de <span>Elementos</span></a></li>

					<li><a href="<?php echo home_url('/midernizacion-int/modernizacion-de-control-electrico' ); ?>">Modernización de <span>Control Eléctrico</span></a></li>

					<li style="padding-bottom:10px;"><a href="<?php echo home_url('/modernizacion-int/resultados-visibles/' ); ?>">Resultados visibles</a></li>

					<li style="padding-bottom:10px;"><a href="<?php echo home_url('modernizacion-int/modernizar-la-cabina-del-ascensor/') ?>">Modernizar la cabina</a></li>

					<!--<li><a href="<?php echo home_url('/modernizacion-int/remodelacion-de-cabina/' ); ?>">Remodelación de <span>Cabina</span></a></li> -->

					<li><a href="<?php echo home_url('/modernizacion-int/elementos-de-seguridad-a-actulizar/' ); ?>">Elementos de <span>Seguridad</span></a></li>

					<!--<li><a href="<?php echo home_url('/modernizacion-int/actualizacion-de-elementos-de-seguridad/' ); ?>">Actualización de <span>elementos de seguridad</span></a></li> -->

				</ul>
			</div>
			<div class="nine columns float-right">
				
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