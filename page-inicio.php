<?php get_header('inicio'); ?>

<div class="page__background">
	<div class="container color__content">
		
		<div class="content__admin container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
				<?php the_content(); ?>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>

	</div>
	
</div>
<?php get_footer(); ?>