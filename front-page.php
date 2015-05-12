<?php get_header(); ?>


	<div class="front__page">
		<div class="container">
			<div class="font__page__logo">
				<h1><a href="#"><img  src="<?php bloginfo('template_url' ); ?>/library/img/logo_index.png" alt=""></a></h1>
			</div>
		</div>

		<!-- Amimacion ascensores -->
		<div class="front__page__animacion">
			<img src="<?php bloginfo('template_url' ); ?>/library/img/edificios.gif" alt="">
		</div>

		<!-- Memu -->
		<div>
			<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'nav', 'menu_class' => 'nav_list')); ?>
		</div>

	</div>
<?php get_footer(); ?>