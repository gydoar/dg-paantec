<?php get_header(); ?>		
				<!-- post 1 -->
				<?php rewind_posts(); ?>
				<div class="#porque-modernizar">
					<?php $recent = new WP_Query('page_id=136'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- post 2 -->
				<?php rewind_posts(); ?>
				<div class="#ubicacion-elementos">
					<?php $recent = new WP_Query('page_id=140'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- post 3 -->
				<?php rewind_posts(); ?>
				<div class="#control-electrico">
					<?php $recent = new WP_Query('page_id=144'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- post 4 -->
				<?php rewind_posts(); ?>
				<div class="#resultados">
					<?php $recent = new WP_Query('page_id=152'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- post 5 -->
				<?php rewind_posts(); ?>
				<div class="#moder-cabina">
					<?php $recent = new WP_Query('page_id=158'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- post 6 -->
				<?php rewind_posts(); ?>
				<div class="#remodel-cabina">
					<?php $recent = new WP_Query('page_id=161'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

					<!-- post 7 -->
				<?php rewind_posts(); ?>
				<div class="#elem-actualizar">
					<?php $recent = new WP_Query('page_id=167'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

				<!-- post 7 -->
				<?php rewind_posts(); ?>
				<div class="#elem-actualizar2">
					<?php $recent = new WP_Query('page_id=169'); while($recent->have_posts()) : $recent->the_post();?>
					       <h3><?php the_title(); ?></h3>
					       <?php the_content(); ?>
					<?php endwhile; ?>
				</div>

<?php get_footer(); ?>