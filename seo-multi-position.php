<?php
/*
	Plugin Name: SEO Multi Position 
	Plugin URI: http://www.moskitothemes.com
	Description: Create once the page in the search engine to index your keyword in all the provinces, and multiply it automatically with multiposition seo. Save your time, FREE!
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

