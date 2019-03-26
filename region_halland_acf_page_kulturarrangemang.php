<?php

	/**
	 * @package Region Halland ACF Page Kulturarrangemang
	 */
	/*
	Plugin Name: Region Halland ACF Page Kulturarrangemang
	Description: ACF-fält för extra fält nederst på en kulturarrangemangs-sida
	Version: 2.1.1
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// vid 'init', anropa funktionen region_halland_register_kulturarrangemang()
	add_action('init', 'region_halland_register_kulturarrangemang' );

	// Denna funktion registrerar en ny post_type och gör den synlig i wp-admin
	function region_halland_register_kulturarrangemang() {
		
		// Vilka labels denna post_type ska ha
		$labels = array(
	        'name' => _x( 'Kulturarrangemang', 'Post type general name', 'textdomain' ),
	        'singular_name' => _x( 'Kulturarrangemang', 'Post type singular name', 'textdomain' ),
	        'menu_name' => _x( 'Kulturarrangemang', 'Admin Menu text', 'textdomain' ),
	        'add_new' => __( 'Lägg till ny', 'textdomain' ),
    		'add_new_item' => __( 'Lägg till ny', 'textdomain' ),
    		'edit_item' => __( 'Editera', 'textdomain' )
	    );
		
		// Inställningar för denna post_type 
	    $args = array(
	        'labels' => $labels,
	        'rewrite' => array('slug' => 'kulturarrangemang'),
			'show_ui' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'public' => true,
			'query_var' => false,
			'menu_icon' => 'dashicons-megaphone',
	        'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	    );

	    // Registrera post_type
	    register_post_type('kulturarrangemang', $args);
	    
	}

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_kulturarrangemang_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_kulturarrangemang_field_groups() {

		// Om funktionen existerar
		if (function_exists('acf_add_local_field_group')):

			// Skapa formlärfält
			acf_add_local_field_group(array(
			    
			    'key' => 'group_1000084',
			    'title' => 'Kulturarrangemang',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_1000128',
			            'label' => __('Ingress', 'regionhalland'),
			            'name' => 'name_1000129',
			            'type' => 'textarea',
			            'instructions' => __('Ingress. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 4,
			            'new_lines' => '',
			        ),
			        1 => array(
			        	'key' => 'field_1000085',
			            'label' => __('Typ', 'regionhalland'),
			            'name' => 'name_1000086',
			            'type' => 'select',
			            'instructions' => __('Välj en arrangemangstyp.', 'regionhalland'),
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
			                1 => __('Arrangemang', 'regionhalland'),
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
			        	'key' => 'field_1000088',
			            'label' => __('Kategori', 'regionhalland'),
			            'name' => 'name_1000089',
			            'type' => 'select',
			            'instructions' => __('Välj en arrangemangskategori.', 'regionhalland'),
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
			        3 => array(
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
			        4 => array(
			          	'key' => 'field_1000094',
			            'label' => __('Är detta arrangemang fullbokat', 'regionhalland'),
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
					5 => array(
			        	'key' => 'field_1000126',
			            'label' => __('Tid', 'regionhalland'),
			            'name' => 'name_1000127',
			            'type' => 'text',
			            'instructions' => __('Ange tid. Max 100 tecken.', 'regionhalland'),
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
			        6 => array( 
		              'key' => 'field_1000097', 
		              'label' => __('Starttid', 'regionhalland'), 
		              'name' => 'name_1000098', 
		              'type' => 'date_time_picker', 
		              'instructions' => __('Fyll i när arrangemanget börjar.', 'regionhalland'), 
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
		          	7 => array( 
		          	  'key' => 'field_1000099', 
		              'label' => __('Sluttid', 'regionhalland'), 
		              'name' => 'name_1000100', 
		              'type' => 'date_time_picker', 
		              'instructions' => __('Fyll i när arrangemanget slutar.', 'regionhalland'), 
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
		          	9 => array( 
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
			        10 => array(
			        	'key' => 'field_1000105',
			            'label' => __('Målgrupp', 'regionhalland'),
			            'name' => 'name_1000106',
			            'type' => 'text',
			            'instructions' => __('Ange målgrupp. Max 100 tecken.', 'regionhalland'),
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
			                'value' => 'kulturarrangemang',
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

	// Returnera Ingress
	function get_region_halland_acf_page_kulturarrangemang_ingress() {
		return get_field('name_1000129');
	}

	// Returnera namnet på vald typ
	function get_region_halland_acf_page_kulturarrangemang_type_name() {
		$field_type = get_field_object('field_1000085');
		return $field_type['choices'][get_field('name_1000086')];
	}

	// Returnera namnet på vald kategori
	function get_region_halland_acf_page_kulturarrangemang_category_name() {
		$field_type = get_field_object('field_1000088');
		return $field_type['choices'][get_field('name_1000089')];
	}
	
	// Returnera namnet på vald subkategori
	function get_region_halland_acf_page_kulturarrangemang_subcategory_name() {
		$field_type = get_field_object('field_1000091');
		return $field_type['choices'][get_field('name_1000092')];
	}

	// Returnera namnet på om det är fullbokat eller inte
	function get_region_halland_acf_page_kulturarrangemang_fullbokat() {
		$tmpFullbokat = is_array(get_field('name_1000095'));
		if ($tmpFullbokat == true) {
			$strFullbokat = "Ja";
		} else {
			$strFullbokat = "Nej";
		}
		return $strFullbokat;	
	}
	
	// Returnera tid som fritext
	function get_region_halland_acf_page_kulturarrangemang_tid() {
		return get_field('name_1000127');
	}

	// Returnera starttid
	function get_region_halland_acf_page_kulturarrangemang_start_tid() {
		return get_field('name_1000098');	
	}

	// Returnera starttid (dag)
	function get_region_halland_acf_page_kulturarrangemang_start_tid_dag() {
		
		// Preparera startid - dag
		$kulturStartTid = get_field('name_1000098');	
		$kulturDag = substr($kulturStartTid, 8, 2);
		$kulturDagFirst = substr($kulturDag, 0, 1);
		if ($kulturDagFirst == 0) {
			$kulturStartTidDag = substr($kulturDag, 1, 1);
		} else {
			$kulturStartTidDag = $pageKulturDag;
		}
		
		// Returnera startid - dag
		return $kulturStartTidDag;	
	}

	// Returnera starttid (månad)
	function get_region_halland_acf_page_kulturarrangemang_start_tid_manad() {
		
		// Preparera startid - månad
		$kulturStartTid = get_field('name_1000098');	
		$kulturManad = substr($kulturStartTid, 5, 2);
			$kulturManadFirst = substr($kulturManad, 0, 1);
			if ($kulturManadFirst == 0) {
				$kulturStartTidManad = substr($kulturManad, 1, 1);
			} else {
				$kulturStartTidManad = $kulturManad;
			}
			$kulturStartTidManad = region_halland_acf_page_kulturarrangemang_manad($kulturStartTidManad);

		// Returnera startid  - månad
		return $kulturStartTidManad;	
	}

	// Returnera sluttid
	function get_region_halland_acf_page_kulturarrangemang_slut_tid() {
		return get_field('name_1000100');	
	}

	// Returnera plats
	function get_region_halland_acf_page_kulturarrangemang_plats() {
		return get_field('name_1000102');	
	}

	// Returnera sista anmälningsdag
	function get_region_halland_acf_page_kulturarrangemang_sista_anmalningstid() {
		return get_field('name_1000104');	
	}

	// Returnera målgrupp
	function get_region_halland_acf_page_kulturarrangemang_malgrupp() {
		return get_field('name_1000106');	
	}

	function get_region_halland_acf_page_kulturarrangemang_items($myAntal = -1) {
		
		$date = date("Y-m-d");
		
		// Preparerar array för att hämta ut nyheter
		$args = array( 
			'post_type' => 'kulturarrangemang',
			'posts_per_page' => $myAntal,
			'meta_key' => 'name_1000098',
            'orderby' => 'meta_value meta_value_num',
            'order'	=> 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'name_1000100',
                    'value' => $date,
                    'compare' => '>='
                )
            ),
            
		);

		// Hämta valda nyheter
		$myPages = get_posts($args);
		
		foreach ($myPages as $page) {

			// Ingress
			$page->post_ingress = get_field('name_1000129', $page->ID);
			
			// Lägg till sidans url 	
			$page->url = get_permalink($page->ID);

			// Bild
			$page->image = get_the_post_thumbnail($page->ID);
			$page->image_url = get_the_post_thumbnail_url($page->ID);
			
			// Publicerad datum
			$page->date = get_the_date('Y-m-d', $page->ID);

			// Kulturtyp
			$field_type_typ = get_field_object('field_1000085', $page->ID);
			$page->kultur_typ = $field_type_typ['choices'][get_field('name_1000086', $page->ID)];

			// Kategori
			$field_type_category = get_field_object('field_1000088', $page->ID);
			$page->kultur_category = $field_type_category['choices'][get_field('name_1000089', $page->ID)];
			
			// Subkategori
			$field_type_sub_category = get_field_object('field_1000091', $page->ID);
			$page->kultur_sub_category = $field_type_sub_category['choices'][get_field('name_1000092', $page->ID)];

			// Fullbokat
			$tmpFullbokat = is_array(get_field('name_1000095', $page->ID));
			if ($tmpFullbokat == true) {
				$strFullbokat = "Ja";
				$intFullbokat = 1;
			} else {
				$strFullbokat = "Nej";
				$intFullbokat = 0;
			}
			$page->kultur_fullbokat_int =  $intFullbokat;
			$page->kultur_fullbokat =  $strFullbokat;

			// Starttid
			$page->kultur_start_tid = get_field('name_1000098', $page->ID);
			
			// Starttid - dag
			$page->kultur_start_tid_dag = region_halland_acf_page_kulturarrangemang_start_tid_dag($page->kultur_start_tid);

			// Starttid - manad
			$page->kultur_start_tid_manad = region_halland_acf_page_kulturarrangemang_start_tid_manad($page->kultur_start_tid);

			// Sluttid
			$page->kultur_slut_tid = get_field('name_1000100', $page->ID);
			
			// Tidpunkt
			$page->kultur_tid = get_field('name_1000127', $page->ID);

			// Plats
			$page->kultur_plats = get_field('name_1000102', $page->ID);

			// Målgrupp
			$page->kultur_malgrupp = get_field('name_1000106', $page->ID);
		
		}
		
		// Returnera array med alla poster
		return $myPages;

	}

	// Returnera nummer för dag
	function region_halland_acf_page_kulturarrangemang_start_tid_dag($startTid) {

		$startTidDag = substr($startTid, 8, 2);
		$startTidDagFirst = substr($startTidDag, 0, 1);
		if ($startTidDagFirst == 0) {
			$kulturStartTidDag = substr($startTidDag, 1, 1);
		} else {
			$kulturStartTidDag = $startTidDag;
		}
		return $kulturStartTidDag;
	}

	// Returnera nummer för vald månad
	function region_halland_acf_page_kulturarrangemang_start_tid_manad($startTid) {
		$startTidManad = substr($startTid, 5, 2);
		$startTidManadFirst = substr($startTidManad, 0, 1);
		if ($startTidManadFirst == 0) {
			$kulturStartTidManad = substr($startTidManad, 1, 1);
		} else {
			$kulturStartTidManad = $startTidManad;
		}
		$kulturStartTidManadLetters = region_halland_acf_page_kulturarrangemang_manad($kulturStartTidManad);
		return $kulturStartTidManadLetters;
	}
	
	// Return 3-bokstav för aktuell månad
	function region_halland_acf_page_kulturarrangemang_manad($manad) {
		
		// Temporär variabel för namn på månad
		$strManad = "";

		// Returna namn på månad
		switch ($manad) {
		     case '1':
		         $strManad = "Jan";
		         break;
		     case '2':
		         $strManad = "Feb";
		         break;
		     case '3':
		         $strManad = "Mar";
		         break;
		     case '4':
		         $strManad = "Apr";
		         break;
		     case '5':
		         $strManad = "Maj";
		         break;
		     case '6':
		         $strManad = "Jun";
		         break;
		     case '7':
		         $strManad = "Jul";
		         break;
		     case '8':
		         $strManad = "Aug";
		         break;
		     case '9':
		         $strManad = "Sep";
		         break;
		     case '10':
		         $strManad = "Okt";
		         break;
		     case '11':
		         $strManad = "Nov";
		         break;
		     case '12':
		         $strManad = "Dec";
		         break;
		 }

		 // Returnera namn på månad
		 return $strManad;

	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_kulturarrangemang_activate() {
		
		// Vi aktivering, registrera post_type "kulturarrangemang"
		region_halland_register_kulturarrangemang();

		// Tala om för wordpress att denna post_type finns
		// Detta gör att permalink fungerar
	    flush_rewrite_rules();
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_kulturarrangemang_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_kulturarrangemang_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_kulturarrangemang_deactivate');

?>