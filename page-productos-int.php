
<?php rewind_posts(); ?>
				<div class="#productos">
					<?php $recent = new WP_Query('page_id=45'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>
					
				<!-- Pagina 2 -->
				<div id="#ascensores">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=48'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 3 -->
				<div id="#electromecanicos">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=64'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 4 -->
				<div id="#hidraulicos">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=67'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 5 -->
				<div id="#discapacitados">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=71'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 6 -->
				<div id="#salva-escalera">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=81'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 7 -->
				<div id="#montacargas">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=84'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 8 -->
				<div id="#sis-vehiculos">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=89'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 9 -->
				<div id="#montacoches">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=92'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 10 -->
				<div id="#sis-parqueo">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=95'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- Pagina 10 -->
				<div id="#esc-electricasd">
					<?php rewind_posts(); ?>
					<?php $recent = new WP_Query('page_id=99'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

<?php get_footer(); ?>