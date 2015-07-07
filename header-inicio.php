<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
 			global $page, $paged; 
 			wp_title( '|', true, 'right' ); 
 			bloginfo( 'name' ); 
 			$site_description = get_bloginfo( 'description', 'display' ); 
 				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
 				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
 		?>
 	</title>

 	<link rel="apple-touch-icon" href="<?php bloginfo('template_url' ); ?>/library/img/apple-touch-icon.png">
 	<link rel="icon" type="image/png" href="<?php bloginfo('template_url' ); ?>/library/img/favicon.ico">

 	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">

	<?php wp_head(); ?>

</head>
<body>

<header class="header">
	<?php if (is_page('23')){ ?>
		<h1><a href="<?php echo home_url('/' ); ?>"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/logo_tekno.png" alt=""></a></h1>
	<?php } else{ ?>	
	 	<h1><a href="<?php echo home_url('/' ); ?>"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a></h1>
	<?php } ?>

	<!-- Memu -->
		<div>
			<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'nav', 'menu_class' => 'nav_list')); ?>
		</div>
</header>
