<?php

if(is_numeric($_REQUEST['rs_duplacate_page'])){
	rs_insert_duplicate_page_form();
}

function rs_activated() {

   	global $wpdb;
  	$your_table_name = $wpdb->prefix . 'seo_multi_position';
  	$your_table_name_list = $wpdb->prefix . 'seo_multi_position_list';
  	$your_table_name_list_attr = $wpdb->prefix . 'seo_multi_position_list_attr';

	// create the ECPT metabox database table
	if($wpdb->get_var("show tables like '$your_table_name'") != $your_table_name) 
	{
		$sql = "

		CREATE TABLE wp_seo_multi_position ( id mediumint(9) NOT NULL PRIMARY KEY AUTO_INCREMENT, page_id mediumint(9) NOT NULL, sub_page mediumint(9) NOT NULL, word VARCHAR(125) );

CREATE TABLE wp_seo_multi_position_list ( id mediumint(9) NOT NULL PRIMARY KEY AUTO_INCREMENT, title VARCHAR(125) );

CREATE TABLE wp_seo_multi_position_list_attr ( id mediumint(9) NOT NULL PRIMARY KEY AUTO_INCREMENT, title VARCHAR(125), id_list mediumint(9) );

		);";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
 
}

function rs_deactivate()
{
	global $wpdb;
	
	/**
	 *  DEACTIVATED
	 */
	 
}

function rs_uninstall()
{
	global $wpdb;
	$your_table_name = $wpdb->prefix . 'seo_multi_position';
	$sql = "DROP TABLE ". $your_table_name;
	$wpdb->query($sql);
}


function rs_insert_duplicate_page_form(){
	global $wpdb;
	$page = get_post( $_REQUEST['rs_duplacate_page'], 'ARRAY_A' );
	
	/* CHECK IF EXIST DUPLICATE PAGE */
	 
	 $duplicates_row = $wpdb->get_results( 'SELECT * FROM wp_seo_multi_position WHERE page_id = ' . $page['ID'], 'ARRAY_A' );
	 	 
	 if( sizeof($duplicates_row) > 0 ){
	 	/* UPDATE */
	 	
	 	foreach( $duplicates_row AS $row ){
	 		$sub_page = $row['sub_page'];
	 		$word = $row['word'];
			
			$body = str_replace("[[termine]]", $word, $_POST['post_content']);
			$title = str_replace("[[termine]]", $word, $_POST['post_title']);
			
			$page_duplicate = array(
			    'post_content' => $body,			    
			    'post_title' => $title,
			);
			
			$wpdb->update(
                $wpdb->prefix . 'posts',
				$page_duplicate,
				array( 'ID' => $sub_page ), 
				array( 
					'%s',	
				), 
				array( '%d' ) 
			);
			
			update_post_meta( $sub_page, '_wp_page_template', $_POST["page_template"] );
			
			if ( ! function_exists('is_plugin_inactive')) {
    			require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
			}
			
			
			if ( !is_plugin_inactive('wordpress-seo/wp-seo.php') ) {
												
				$fokus_key = $_POST['yoast_wpseo_focuskw'];
				$fokus_key = str_replace("[[termine]]", $word, $fokus_key);
				
				$title = $_POST['yoast_wpseo_title'];
				$title = str_replace("[[termine]]", $word, $title);
				
				$metadesc = $_POST['yoast_wpseo_metadesc'];
				$metadesc = str_replace("[[termine]]", $word, $metadesc);
				
				$metakeywords = $_POST['yoast_wpseo_metakeywords'];
				$metakeywords = str_replace("[[termine]]", $word, $metakeywords);
				
				update_post_meta( $sub_page, '_yoast_wpseo_focuskw', $fokus_key );
				update_post_meta( $sub_page, '_yoast_wpseo_title', $title );
				update_post_meta( $sub_page, '_yoast_wpseo_metadesc', $metadesc );
				update_post_meta( $sub_page, '_yoast_wpseo_metakeywords', $metakeywords );
				
			}
	 	}
	 	
	 }else{

	 	/* INSERT */
		$provinces = array(
			"AG" => "Agrigento", 			
			"AL" => "Alessandria", 
			"AN" => "Ancona", 
			"AQ" => "Aquila",
			"AR" => "Arezzo", 
			"AP" => "Ascoli Piceno", 
			"AT" => "Asti", 
			"AV" => "Avellino",
			"BA" => "Bari", 
			"BT" => "Barletta Andria Trani", 
			"BL" => "Belluno",
			"BN" => "Benevento", 
			"BG" => "Bergamo", 
			"BI" => "Biella", 
			"BO" => "Bologna",
			"BZ" => "Bolzano", 
			"BS" => "Brescia", 
			"BR" => "Brindisi", 
			"CA" => "Cagliari",
			"CL" => "Caltanissetta", 
			"CB" => "Campobasso", 
			"CI" => "Carbonia-Iglesias",
			"CE" => "Caserta", 
			"CT" => "Catania", 
			"CZ" => "Catanzaro", 
			"CH" => "Chieti",
			"CO" => "Como", 
			"CS" => "Cosenza", 
			"CR" => "Cremona", 
			"KR" => "Crotone",
			"CN" => "Cuneo", 
			"EN" => "Enna", 
			"FM" => "Fermo", 
			"FE" => "Ferrara",
			"FI" => "Firenze", 
			"FG" => "Foggia", 
			"FC" => "Forlì-Cesena", 
			"FR" => "Frosinone",
			"GE" => "Genova", 
			"GO" => "Gorizia", 
			"GR" => "Grosseto", 
			"IM" => "Imperia",
			"IS" => "Isernia", 
			"LT" => "Latina", 
			"LE" => "Lecce", 
			"LC" => "Lecco",
			"LI" => "Livorno", 
			"LO" => "Lodi", 
			"LU" => "Lucca", 
			"MC" => "Macerata",
			"MN" => "Mantova", 
			"MS" => "Massa-Carrara", 
			"MT" => "Matera",
			"VS" => "Medio Campidano", 
			"ME" => "Messina", 
			"MI" => "Milano", 
			"MO" => "Modena",
			"MB" => "Monza e della Brianza", 
			"NA" => "Napoli", 
			"NO" => "Novara",
			"NU" => "Nuoro", 
			"OG" => "Ogliastra", 
			"OT" => "Olbia-Tempio", 
			"OR" => "Oristano",
			"PD" => "Padova", 
			"PA" => "Palermo", 
			"PR" => "Parma", 
			"PV" => "Pavia",
			"PG" => "Perugia", 
			"PU" => "Pesaro e Urbino", 
			"PE" => "Pescara", 
			"PC" => "Piacenza",
			"PI" => "Pisa", 
			"PT" => "Pistoia", 
			"PN" => "Pordenone", 
			"PZ" => "Potenza",
			"PO" => "Prato", 
			"RG" => "Ragusa", 
			"RA" => "Ravenna", 
			"RC" => "Reggio Calabria",
			"RE" => "Reggio Emilia", 
			"RI" => "Rieti", 
			"RN" => "Rimini", 
			"RM" => "Roma",
			"RO" => "Rovigo", 
			"SA" => "Salerno", 
			"SS" => "Sassari", 
			"SV" => "Savona",
			"SI" => "Siena", 
			"SR" => "Siracusa", 
			"SO" => "Sondrio", 
			"SP" => "Spezia",
			"TA" => "Taranto", 
			"TE" => "Teramo", 
			"TR" => "Terni", 
			"TO" => "Torino",
			"TP" => "Trapani", 
			"TN" => "Trento", 
			"TV" => "Treviso", 
			"TS" => "Trieste",
			"UD" => "Udine",
			"AO" => "Valle d'Aosta", 
			"VA" => "Varese", 
			"VE" => "Venezia",
			"VB" => "Verbano Cusio Ossola", 
			"VC" => "Vercelli", 
			"VR" => "Verona",
			"VV" => "Vibo Valentia", 
			"VI" => "Vicenza", 
			"VT" => "Viterbo"
		);

		foreach($provinces AS $pv){
			
			$body = str_replace("[[termine]]", $pv, $_POST['post_content']);
			$title = str_replace("[[termine]]", $pv, $_POST['post_title']);
			$page_duplicate = array(
			    'post_author' => 1,
			    'post_date' => date('Y-m-d H:i:s'),
			    'post_date_gmt' => date('Y-m-d H:i:s'),
			    'post_content' => $body,
			    'post_title' => $title,
			    'post_name' => sanitize_title($title),
			    'post_excerpt' => '',
			    'post_status' => 'publish',
			    'comment_status' => 'open',
			    'ping_status' => 'open',
			    'post_modified' => date('Y-m-d H:i:s'),
			    'post_modified_gmt' => date('Y-m-d H:i:s'),
			    'post_parent' => 0,
			    'post_type' => 'page',
			    'guid' => $page['guid'],
			    'comment_count' => 0
			);
									
			$my_post_Format = array(
				'%s','%s','%s'
			);
			
			$wpdb->insert( $wpdb->prefix . 'posts', $page_duplicate, $my_post_Format);
			$new_page_id = 	$wpdb->insert_id;
			add_post_meta( $new_page_id, '_wp_page_template', $_POST["page_template"] );
			
			
			if ( ! function_exists('is_plugin_inactive')) {
    			require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
			}
			
			
			if ( !is_plugin_inactive('wordpress-seo/wp-seo.php') ) {
				$fokus_key = $_POST['yoast_wpseo_focuskw'];
				$fokus_key = str_replace("[[termine]]", $pv, $fokus_key);
				
				$title = $_POST['yoast_wpseo_title'];
				$title = str_replace("[[termine]]", $pv, $title);
				
				$metadesc = $_POST['yoast_wpseo_metadesc'];
				$metadesc = str_replace("[[termine]]", $pv, $metadesc);
				
				$metakeywords = $_POST['yoast_wpseo_metakeywords'];
				$metakeywords = str_replace("[[termine]]", $pv, $metakeywords);
				
				add_post_meta( $new_page_id, '_yoast_wpseo_focuskw', $fokus_key );
				add_post_meta( $new_page_id, '_yoast_wpseo_title', $title );
				add_post_meta( $new_page_id, '_yoast_wpseo_metadesc', $metadesc );
				add_post_meta( $new_page_id, '_yoast_wpseo_metakeywords', $metakeywords );
				
			}	
			
			$args = array(
				'page_id' => $page['ID'],
				'sub_page' => $new_page_id,
				'word' => $pv
				
			);
			
			$wpdb->insert( 'wp_seo_multi_position', $args, $my_post_Format);
		}

	 }
	 
}

function rs_delete_relation(){
	global $wpdb;
	$post = get_post();	
	$wpdb->delete( 'wp_seo_multi_position',  array( 'sub_page' => $_REQUEST['post'][0] ));
	$wpdb->delete( 'wp_seo_multi_position',  array( 'page_id' => $_REQUEST['post'][1] ));
}


function rs_add_option_page()
{
    add_options_page('Duplicate Page Options', 'SEO Multiposition', 'administrator', 'duplicate-page', 'rs_duplicate_page_form');
}


 
?>