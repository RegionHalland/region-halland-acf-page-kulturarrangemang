<?php

	/**
	 * @package Region Halland ACF Page Kulturevenemang
	 */
	/*
	Plugin Name: Region Halland ACF Page Kulturevenemang
	Description: ACF-fält för extra fält nederst på en kulturevenemangs-sida
	Version: 1.0.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// vid 'init', anropa funktionen region_halland_register_utbildning()
	add_action('init', 'region_halland_register_kulturevenemang' );

	// Denna funktion registrerar en ny post_type och gör den synlig i wp-admin
	function region_halland_register_kulturevenemang() {
		
		// Vilka labels denna post_type ska ha
		$labels = array(
		        'name'                  => _x( 'Kulturevenemang', 'Post type general name', 'textdomain' ),
		        'singular_name'         => _x( 'Kulturevenemang', 'Post type singular name', 'textdomain' ),
		        'menu_name'             => _x( 'Kulturevenemang', 'Admin Menu text', 'textdomain' ),
		        'add_new'               => __( 'Lägg till ny', 'textdomain' ),
        		'add_new_item'          => __( 'Lägg till ny', 'textdomain' ),
        		'edit_item'          	=> __( 'Editera', 'textdomain' )
		    );
		
		// Inställningar för denna post_type 
	    $args = array(
	        'labels' => $labels,
	        'rewrite' => array('slug' => 'kulturevenemang'),
			'show_ui' => true,
			'has_archive' => false,
			'publicly_queryable' => true,
			'public' => true,
			'query_var' => false,
			'menu_icon' => 'dashicons-megaphone',
	        'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	    );

	    // Registrera post_type
	    register_post_type('kulturevenemang', $args);
	    
	}

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_kulturevenemang_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_kulturevenemang_field_groups() {

		// Om funktionen existerar
		if (function_exists('acf_add_local_field_group')):

			// Skapa formlärfält
			acf_add_local_field_group(array(
			    
			    'key' => 'group_1000084',
			    'title' => 'Kulturevenemang',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_1000085',
			            'label' => __('Typ', 'regionhalland'),
			            'name' => 'name_1000086',
			            'type' => 'select',
			            'instructions' => __('Välj en evenemangstyp.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => array(
			                0 => array(
			                    0 => array(
			                        'field' => 'field_1000087',
			                        'operator' => '!=',
			                        'value' => '1',
			                    ),
			                ),
			            ),
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'choices' => array(
			                1 => __('Evenemang', 'regionhalland'),
			            ),
			            'default_value' => array(
			            ),
			            'allow_null' => 0,
			            'multiple' => 0,
			            'ui' => 0,
			            'ajax' => 0,
			            'return_format' => 'value',
			            'placeholder' => '',
			        ),
			        1 => array(
			        	'key' => 'field_1000088',
			            'label' => __('Kategori', 'regionhalland'),
			            'name' => 'name_1000089',
			            'type' => 'select',
			            'instructions' => __('Välj en evenemangskategori.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => array(
			                0 => array(
			                    0 => array(
			                        'field' => 'field_1000090',
			                        'operator' => '!=',
			                        'value' => '1',
			                    ),
			                ),
			            ),
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'choices' => array(
			                1 => __('Kultur', 'regionhalland'),
			            ),
			            'default_value' => array(
			            ),
			            'allow_null' => 0,
			            'multiple' => 0,
			            'ui' => 0,
			            'ajax' => 0,
			            'return_format' => 'value',
			            'placeholder' => '',
			        ),
			        2 => array(
			        	'key' => 'field_1000091',
			            'label' => __('Underkategori', 'regionhalland'),
			            'name' => 'name_1000092',
			            'type' => 'select',
			            'instructions' => __('Välj en underkategori.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => array(
			                0 => array(
			                    0 => array(
			                        'field' => 'field_1000093',
			                        'operator' => '!=',
			                        'value' => '1',
			                    ),
			                ),
			            ),
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'choices' => array(
			                1 => __('Dans', 'regionhalland'),
			                2 => __('Film', 'regionhalland'),
			                3 => __('Musik', 'regionhalland'),
			            ),
			            'default_value' => array(
			            ),
			            'allow_null' => 0,
			            'multiple' => 0,
			            'ui' => 0,
			            'ajax' => 0,
			            'return_format' => 'value',
			            'placeholder' => '',
			        ),
			        3 => array(
			          	'key' => 'field_1000094',
			            'label' => __('Är detta evenemang fullbokat', 'regionhalland'),
			            'name' => 'name_1000095',
			            'type' => 'checkbox',
			            'instructions' => '',
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'choices' => array(
			                'choice_1000096' => __('Ja, det är fullbokat', 'regionhalland'),
			            ),
			            'allow_custom' => 0,
			            'save_custom' => 0,
			            'default_value' => array(
			            ),
			            'layout' => 'vertical',
			            'toggle' => 0,
			            'return_format' => 'value',
			    	),
					4 => array( 
		              'key' => 'field_1000097', 
		              'label' => __('Starttid', 'regionhalland'), 
		              'name' => 'name_1000098', 
		              'type' => 'date_time_picker', 
		              'instructions' => __('Fyll i när evenemanget börjar.', 'regionhalland'), 
		              'required' => 0, 
		              'conditional_logic' => 0, 
		              'wrapper' => array( 
		                  'width' => '', 
		                  'class' => '', 
		                  'id' => '', 
		              ), 
		              'display_format' => 'Y-m-d', 
		              'return_format' => 'Y-m-d', 
		              'first_day' => 1, 
		          	), 
		          	5 => array( 
		          	  'key' => 'field_1000099', 
		              'label' => __('Sluttid', 'regionhalland'), 
		              'name' => 'name_1000100', 
		              'type' => 'date_time_picker', 
		              'instructions' => __('Fyll i när evenemanget slutar.', 'regionhalland'), 
		              'required' => 0, 
		              'conditional_logic' => 0, 
		              'wrapper' => array( 
		                  'width' => '', 
		                  'class' => '', 
		                  'id' => '', 
		              ), 
		              'display_format' => 'Y-m-d', 
		              'return_format' => 'Y-m-d', 
		              'first_day' => 1, 
		           	),
			       	6 => array(
			        	'key' => 'field_1000101',
			            'label' => __('Plats', 'regionhalland'),
			            'name' => 'name_1000102',
			            'type' => 'text',
			            'instructions' => __('Plats. Max 100 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 100,
			            'rows' => 2,
			            'new_lines' => '',
			       	),
		          	7 => array( 
		          	  'key' => 'field_1000103', 
		              'label' => __('Sista anmälningsdag', 'regionhalland'), 
		              'name' => 'name_1000104', 
		              'type' => 'date_time_picker', 
		              'instructions' => __('Fyll i sista anmälningsdag', 'regionhalland'), 
		              'required' => 0, 
		              'conditional_logic' => 0, 
		              'wrapper' => array( 
		                  'width' => '', 
		                  'class' => '', 
		                  'id' => '', 
		              ), 
		              'display_format' => 'Y-m-d', 
		              'return_format' => 'Y-m-d', 
		              'first_day' => 1, 
		            ),
			        8 => array(
			        	'key' => 'field_1000105',
			            'label' => __('Målgrupp', 'regionhalland'),
			            'name' => 'name_1000106',
			            'type' => 'text',
			            'instructions' => __('ANge målgrupp. Max 100 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 100,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'post_type',
			                'operator' => '==',
			                'value' => 'kulturevenemang',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;

	}

	// Returnera namnet på vald typ
	function get_region_halland_acf_page_kulturevenemang_type_name() {
		$field_type = get_field_object('field_1000085');
		return $field_type['choices'][get_field('name_1000086')];
	}

	// Returnera namnet på vald kategori
	function get_region_halland_acf_page_kulturevenemang_category_name() {
		$field_type = get_field_object('field_1000088');
		return $field_type['choices'][get_field('name_1000089')];
	}
	
	// Returnera namnet på vald subkategori
	function get_region_halland_acf_page_kulturevenemang_subcategory_name() {
		$field_type = get_field_object('field_1000091');
		return $field_type['choices'][get_field('name_1000092')];
	}

	// Returnera namnet på om det är fullbokat eller inte
	function get_region_halland_acf_page_kulturevenemang_fullbokat() {
		$tmpFullbokat = is_array(get_field('name_1000095'));
		if ($tmpFullbokat == true) {
			$strFullbokat = "Ja";
		} else {
			$strFullbokat = "Nej";
		}
		return $strFullbokat;	
	}
	
	// Returnera starttid
	function get_region_halland_acf_page_kulturevenemang_start_tid() {
		return get_field('name_1000098');	
	}

	// Returnera sluttid
	function get_region_halland_acf_page_kulturevenemang_slut_tid() {
		return get_field('name_1000100');	
	}

	// Returnera plats
	function get_region_halland_acf_page_kulturevenemang_plats() {
		return get_field('name_1000102');	
	}

	// Returnera sista anmälningsdag
	function get_region_halland_acf_page_kulturevenemang_sista_anmalningstid() {
		return get_field('name_1000104');	
	}

	// Returnera målgrupp
	function get_region_halland_acf_page_kulturevenemang_malgrupp() {
		return get_field('name_1000106');	
	}
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_kulturevenemang_activate() {
		
		// Vi aktivering, registrera post_type "utbildning"
		region_halland_register_kulturevenemang();

		// Tala om för wordpress att denna post_type finns
		// Detta gör att permalink fungerar
	    flush_rewrite_rules();
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_kulturevenemang_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_kulturevenemang_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_kulturevenemang_deactivate');

?>