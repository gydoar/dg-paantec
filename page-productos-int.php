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
			<div class="three columns float">
				<ul class="ascensor">
					<img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt="">
					<br><br>
					<li><a href="<?php echo home_url('/productos-int/ascensores' ); ?>">Ascensores</a></li><br>

					<li><a href="<?php echo home_url('/productos-int/equipos-para-discapacitados/' ); ?>">Equipos para <span>discapacitados</span></a></li>

					<li><a href="<?php echo home_url('/productos-int/montacargas/' ); ?>">Montacargas</a></li><br>

					<li><a href="<?php echo home_url('/productos-int/sistemas-para-vehiculos/' ); ?>">Sistema para Vehículos</a></li><br>

					<li><a href="<?php echo home_url('/productos-int/escaleras-electricas-y-andenes-moviles' ); ?>">Escaleras eléctricas y <span>andenes móviles</span></a></li>

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