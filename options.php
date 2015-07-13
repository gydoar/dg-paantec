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
		'name' => __( 'MISION - VISION - OBJETIVOS', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Misión', 'theme-textdomain' ),
		'desc' => __( 'Texto Misión', 'theme-textdomain' ),
		'id' => 'txt_mision',
		'std' => '<p>En Paantec nos dedicamos a  la fabricación, instalación, modernización y mantenimiento de ascensores para pasajeros y carga, personalizamos el diseño acorde con las necesidades del cliente garantizando cumplimiento, seguridad, confiabilidad, durabilidad y soporte técnico permanente.<br><br>
			Operamos desde 1979 con personal competente y comprometido con la satisfacción de nuestros clientes, buscando el bienestar y desarrollo integral de nuestros colaboradores,  generando rentabilidad a los accionistas, construyendo relaciones beneficiosas con proveedores y comprometidos con la responsabilidad social y crecimiento del país.</p>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Visión', 'theme-textdomain' ),
		'desc' => __( 'Texto Visión', 'theme-textdomain' ),
		'id' => 'txt_vision',
		'std' => '<p>En el año 2017, Paantec. será una compañía líder en ventas de ascensores con requerimientos especiales, servicios de mantenimiento, soporte técnico y modernización brindando la mejor atención a sus clientes con procesos eficientes y el respaldo de  firmas extranjeras que nos proveen  productos tecnológicamente avanzados, confiables y seguros.</p>',
		'type' => 'textarea'
	);

		$options[] = array(
		'name' => __( 'Objetivos', 'theme-textdomain' ),
		'desc' => __( 'Texto Objetivos', 'theme-textdomain' ),
		'id' => 'txt_objetivos',
		'std' => '<span style="font-size: 14pt;"><strong>Objetivos Principios y Valores</strong></span>
			<br><br>
			<strong>1. JUNTOS TRABAJAMOS POR UN MISMO FIN</strong>
			<br>
			Somos concientes de la importancia de integrar las fuerzas y conocimientos de cada área para poder alcanzar los objetivos de la organización y lograr la satisfacción de nuestros clientes.
			<br><br>

			<strong>2. NOS COMPROMETEMOS CON NUESTROS CLIENTES</strong><br>
			Trabajamos por la seguridad, respaldo y cumplimiento de los requerimientos de nuestros clientes.<br><br>

			<strong>3. HACEMOS LAS COSAS BIEN</strong><br>
			Todas nuestras acciones están regidas por parámetros de calidad, que nos permiten mejorar cada día.<br><br>

			<strong>4. LA DIGNIDAD HUMANA SE RESPALDA CON VALORES</strong><br>
			La justicia, integridad, el respeto, la responsabilidad, la tolerancia y la honestidad son valores fundamentales para hacer posibles las relaciones de convivencia entre las personas ya que son una condición indispensable para el surgimiento de la confianza.<br><br>

			<strong>5. SOMOS UNA EMPRESA QUE ESCUCHA</strong><br>
			Estamos dispuestos e interesados en escuchar las sugerencias, reclamos y dar soluciones efectivas. , por eso la comunicación es el común denominador con nuestros clientes, empleados, proveedores y todas las personas con las que interactuamos.<br><br>

			<strong>6. LA INNOVACIÓN NOS HACE CRECER</strong><br>
			Aportamos ideas creativas para mejorar los procesos internos de la organización así como también los equipos que fabricamos y modernizamos.<br><br>

			<strong>7. CAPACITACIÓN Y DESARROLLO</strong><br>
			La capacitación es un factor muy importante en la vida de las personas, la educación significa progreso, por eso la organización apoya al personal para este fin.<br><br>

			<strong>8. GENERACIÓN DE VALOR</strong><br>
			Creemos que el éxito de los resultados de la empresa se convierte en una oportunidad para construir calidad de vida, generar crecimiento para nuestras familias, valor para nuestra empresa y desarrollo para el país.',
		'type' => 'textarea'
	);

	//Listado de clientes image
	
	$options[] = array(
		'name' => __( 'Cargar listado de clientes IMG', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'cli_img',
		'std' => '',
		'type' => 'upload'
	);



	//Contacto
	$options[] = array(
		'name' => __( 'CONTACTENOS', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Contacto Izquierda', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'cont_izq',
		'std' => '<h6><strong>Bogotá</strong></h6>
					<p>Oficinas administrativas</p>
					<p>Calle 90 No. 19A - 49. Oficina 805</p>
					<p>PBX:(+57 1) 257 15 11</p>
					<br>	
					<h6><strong>Cali</strong></h6>
					<p>Holguines Trade Center, Torre Valle del Lili · Of 315</p>
					<p>(+57 2) 315 6084</p>
					<br>
					<h6><strong>Costa Atlántica</strong></h6>
					<p>Edificio Fidenze - Barranquilla</p>
					<p>Cra. 53 No. 74 – 135. Piso 2, Local 8</p>
					<p>(+57 5) 368 6180 - 368 4675</p>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Contacto Derecha', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'cont_der',
		'std' => '<h6><strong>Planta de Producción</strong></h6>
					<p>Calle 15 No. 36 - 68</p>
					<p>PBX: (+57 1) 370 30 20</p>
					<br>	
					<h6><strong>Bucaramanga</strong></h6>
					<p>Calle 51 No. 35 - 28 · INT 100 · Of 324</p>
					<p>(+57 7) 643 2036</p>
					<br>
					<h6><strong>PANAMÁ</strong></h6>
					<h6><strong>Ciudad de Panamá</strong></h6>
					<p>Obarrio Calle 61 Casa 29</p>
					<p>(+507) 265 5161</p>',
		'type' => 'textarea'
	);
	



	return $options;
}