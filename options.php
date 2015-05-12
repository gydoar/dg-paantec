<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'CONTACTENOS', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Dirección en bogotá', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir_bogota',
		'std' => 'Calle 90 No. 19A - 49. Oficina 805',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Teléfonos en bogotá', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'tel_bogota',
		'std' => 'PBX: (+571) 257 15 11',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Dirección planta producción bogotá', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir_pro_bogota',
		'std' => 'Calle 15 No. 36 - 68',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Teléfono planta producción bogotá', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'tel_pro_bogota',
		'std' => 'PBX: (+571) 370 30 20',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Dirección cali', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir_cali',
		'std' => 'Holguines Trade Center, Torre Valle del Lili · Of 315',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Teléfono cali', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'tel_cali',
		'std' => '(+572) 315 6084',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Dirección 1 Costa Atlantica', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir1_costa',
		'std' => 'Edificio Fidenze - Barranquilla',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Dirección 2 Costa Atlantica', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir2_costa',
		'std' => 'Cra. 53 No. 74 – 135. Piso 2, Local 8',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Teléfonos Costa Atlantica', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'tel_costa',
		'std' => '(+575) 368 6180 - 368 4675',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Dirección Bucaramanga', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir_bucara',
		'std' => 'Calle 51 No. 35 - 28 · INT 100 · Of 324',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Teléfonos Bucaramanga', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'tel_bucara',
		'std' => '(+577) 643 2036',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Dirección Panamá', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir_panama',
		'std' => 'Obarrio Calle 61 Casa 29',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Teléfonos en Panamá', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'tel_panama',
		'std' => '(+507) 265 5161',
		'type' => 'text'
	);



	return $options;
}