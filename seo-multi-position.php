<?php
/*
	Plugin Name: SEO Multi Position 
	Plugin URI: http://www.moskitothemes.com
	Description: Se avete una landing page da posizionare con una determinata parola chiave in tutte le provincie d'Italia, seo multiposition ve lo permette, risparmiando oltretutto molto tempo. Creando la landing page con contenuti e testi con all'interno la parola [[termine]](che rappresenta la variabile provincia) il plugin creerà in automatico una pagina per provincia(totale 120 pagine) andando a sostituire la variabile con il nome della città, che si andranno ad incizzare e posizionare. Potrete cosi gestire 120 pagine modificando una pagina solamente.
	Author: MoskitoThemes Team - Roberto Sacchetti (Developer) - Mirko Purificato (Creative) - Antonio Verardi (Seo Specialist)
	Version: 1.0
	Author URI: http://www.moskitothemes.com/
	Text Domain: seo-multi-position
*/

global $wpdb;
global $wp_rewrite;

define( 'WPDP_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'WPDP_PLUGIN_METABPOX_DIR', untrailingslashit( dirname( __FILE__ ) ). '/metabox' );

require 'duplicate.php';
require 'form.php';
require 'metabox/config.php';
require 'widget/widget.php'; 

add_action('admin_menu', 'rs_add_option_page');
add_action('delete_post', 'rs_delete_relation');

register_activation_hook(	__FILE__,	'rs_activated'  );
register_deactivation_hook(	__FILE__,	'rs_deactivate' );
register_uninstall_hook(	__FILE__,	'rs_uninstall'  );

