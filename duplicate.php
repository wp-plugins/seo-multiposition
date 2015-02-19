<?php

if(is_numeric($_REQUEST['rs_duplacate_page'])){
	rs_insert_duplicate_page_form();
}

function rs_activated() {

   	global $wpdb;
  	$your_table_name = $wpdb->prefix . 'seo_multi_position';
	// create the ECPT metabox database table
	if($wpdb->get_var("show tables like '$your_table_name'") != $your_table_name) 
	{
		$sql = "CREATE TABLE " . $your_table_name . " (
		id mediumint(9) NOT NULL PRIMARY KEY,
		page_id mediumint(9) NOT NULL,
		sub_page mediumint(9) NOT NULL,
		word VARCHAR(125)
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

/*
 * 
 * array(83) {
	 ["_wpnonce"]=> string(10) "44ba0652a8" 
	 ["_wp_http_referer"]=> string(51) "/wp-admin/post.php?post=1443&action=edit&message=10" 
	 ["user_ID"]=> int(1) 
	 ["action"]=> string(8) "editpost" 
	 ["originalaction"]=> string(8) "editpost" 
	 ["post_author"]=> int(1) 
	 ["post_type"]=> string(4) "page" 
	 ["original_post_status"]=> string(5) "draft" 
	 ["referredby"]=> string(68) "http://www.robertosacchetti.com/wp-admin/post-new.php?post_type=page" 
	 ["post_ID"]=> string(4) "1443" 
	 ["meta-box-order-nonce"]=> string(10) "69723594fa" 
	 ["closedpostboxesnonce"]=> string(10) "e90ecf2218" 
	 ["post_title"]=> string(43) "Roberto quanto Ã¨ bello stare a [[termine]]" 
	 ["samplepermalinknonce"]=> string(10) "1502b2e45d" 
	 ["content"]=> string(53) "Roberto quanto Ã¨ bello stare a [[termine]]  " 
	 ["save"]=> string(11) "Salva bozza" 
	 ["wp-preview"]=> string(0) "" 
	 ["hidden_post_status"]=> string(5) "draft" 
	 ["post_status"]=> string(5) "draft" 
	 ["hidden_post_password"]=> string(0) "" 
	 ["hidden_post_visibility"]=> string(6) "public" 
	 ["visibility"]=> string(6) "public" 
	 ["post_password"]=> string(0) "" 
	 ["jj"]=> string(2) "15" 
	 ["mm"]=> string(2) "01" 
	 ["aa"]=> string(4) "2015" 
	 ["hh"]=> string(2) "10" 
	 ["mn"]=> string(2) "09" 
	 ["ss"]=> string(2) "43" 
	 ["hidden_mm"]=> string(2) "01" 
	 ["cur_mm"]=> string(2) "01" 
	 ["hidden_jj"]=> string(2) "15" 
	 ["cur_jj"]=> string(2) "15" 
	 ["hidden_aa"]=> string(4) "2015" 
	 ["cur_aa"]=> string(4) "2015" 
	 ["hidden_hh"]=> string(2) "10" 
	 ["cur_hh"]=> string(2) "10" 
	 ["hidden_mn"]=> string(2) "09" 
	 ["cur_mn"]=> string(2) "09" 
	 ["original_publish"]=> string(8) "Pubblica" 
	 ["parent_id"]=> string(0) "" 
	 ["page_template"]=> string(7) "default" 
	 ["menu_order"]=> string(1) "0" 
	 ["xmlsf_sitemap_nonce"]=> string(10) "5f4f151065" 
	 ["xmlsf_priority"]=> string(0) "" 
	 ["header_inner_custom_box_nonce"]=> string(10) "8ff2f158a2" 
	 ["duplicate"]=> string(1) "1" 
	 ["yoast_wpseo_focuskw"]=> string(0) "" 
	 ["yoast_wpseo_title"]=> string(0) "" 
	 ["yoast_wpseo_metadesc"]=> string(0) "" 
	 ["yoast_wpseo_metakeywords"]=> string(0) "" 
	 ["yoast_wpseo_meta-robots-noindex"]=> string(1) "0" 
	 ["yoast_wpseo_meta-robots-nofollow"]=> string(1) "0" 
	 ["yoast_wpseo_meta-robots-adv"]=> array(1) { [0]=> string(1) "-" } 
	 ["yoast_wpseo_sitemap-include"]=> string(1) "-" 
	 ["yoast_wpseo_sitemap-prio"]=> string(1) "-" 
	 ["yoast_wpseo_canonical"]=> string(0) "" 
	 ["yoast_wpseo_redirect"]=> string(0) "" 
	 ["yoast_wpseo_opengraph-title"]=> string(0) "" 
	 ["yoast_wpseo_opengraph-description"]=> string(0) "" 
	 ["yoast_wpseo_opengraph-image"]=> string(0) "" 
	 ["meta"]=> array(3) { [6838]=> array(2) {
	 		 ["key"]=> string(22) "si_page_video_autoplay" 
	 		 ["value"]=> string(2) "no" 
	 } [6836]=> array(2) { ["key"]=> string(15) "si_photos_title" ["value"]=> string(3) "yes" } 
	 [6837]=> array(2) { ["key"]=> string(18) "si_slider_autoplay" ["value"]=> string(3) "yes" } } 
	 ["_ajax_nonce"]=> string(10) "9ec82c8793" 
	 ["metakeyselect"]=> string(6) "#NONE#" 
	 ["metakeyinput"]=> string(0) "" 
	 ["metavalue"]=> string(0) "" 
	 ["_ajax_nonce-add-meta"]=> string(10) "4a734bc05c" 
	 ["advanced_view"]=> string(1) "1" 
	 ["comment_status"]=> string(4) "open" 
	 ["ping_status"]=> string(4) "open" 
	 ["post_name"]=> string(0) "" 
	 ["post_author_override"]=> string(1) "1" 
	 ["si_meta_box_nonce"]=> string(10) "f187d3b294" 
	 ["si_photos_number"]=> string(0) "" 
	 ["si_photos_title"]=> string(3) "yes" 
	 ["si_page_video"]=> string(0) "" 
	 ["si_page_video_autoplay"]=> string(2) "no" 
	 ["si_page_background"]=> string(0) "" 
	 ["si_slider_autoplay"]=> string(3) "yes" 
	 ["post_mime_type"]=> string(0) "" 
	 ["ID"]=> int(1443) 
	 ["post_content"]=> string(53) "Roberto quanto Ã¨ bello stare a [[termine]]  " 
	 ["post_parent"]=> int(0) }
 * 
 * 
 */
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
				'wp_posts', 
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
			
			$wpdb->insert( 'wp_posts', $page_duplicate, $my_post_Format);	
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
    add_options_page('Duplicate Page Options', 'Duplicate Page Options', 'administrator', 'duplicate-page', 'rs_duplicate_page_form');
}


 
?>