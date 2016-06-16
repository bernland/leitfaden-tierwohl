<?php
/*
Plugin Name: Leitfaden Tierwohl
Description: Mit diesem Plug-in können Quiz erstellt werden, um das Wohlergehen von Tieren anhand von einfach am Tier zu erhebenden Parametern einzuschätzen. Die Quiz dienen der Selbstevaluierung der Beurteilungsskompetenz sowie der Verbesserung der persönlichen Fähigkeiten zur Beurteilung des Tierwohls.
Version:     1.0
Author:      Bernhard Schenkenfelder
Author URI:  http://www.schenkenfelder.co.at
*/
defined( 'ABSPATH' ) or die;

// autoloading for plugin classes
include_once( __DIR__ . '/includes/autoload.php' );

/* Constants */
$leitfaden_tierwohl_dir_name = '/leitfaden-tierwohl/';
$leitfaden_tierwohl_dir_path = plugin_dir_path( __FILE__ );
$leitfaden_tierwohl_dir_url = plugin_dir_url( __FILE__ );
define( 'LEITFADENTIERWOHL_ROOT_DIR', substr( $leitfaden_tierwohl_dir_path, 0, strpos( $leitfaden_tierwohl_dir_path, $leitfaden_tierwohl_dir_name ) + strlen( $leitfaden_tierwohl_dir_name ) ) );
define( 'LEITFADENTIERWOHL_ROOT_URL', substr( $leitfaden_tierwohl_dir_url, 0, strpos( $leitfaden_tierwohl_dir_url, $leitfaden_tierwohl_dir_name) + strlen( $leitfaden_tierwohl_dir_name ) ) );
define( 'LEITFADENTIERWOHL_TABLE_USERBG', 'lftw_userbg' );
define( 'LEITFADENTIERWOHL_TABLE_RESULTS', 'lftw_results' );

// Session
add_action( 'wp_loaded', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'wp_loaded' ) );

// Create DB Tables
register_activation_hook( __FILE__, array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'register_activation_hook' ) );

add_filter( 'show_admin_bar', '__return_false' );

// Shortcode
if( !shortcode_exists( 'leitfaden_tierwohl' ) ) {
	add_shortcode( 'leitfaden_tierwohl', array( 'Schenkenfelder\\LeitfadenTierwohl\\Shortcodes', 'leitfaden_tierwohl' ) );
}