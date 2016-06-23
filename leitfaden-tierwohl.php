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
define( 'LEITFADENTIERWOHL_PLUGIN_NAME', 'leitfaden-tierwohl' );

// Session
add_action( 'wp_loaded', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'wp_loaded' ) );

// Create DB Tables
register_activation_hook( __FILE__, array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'register_activation_hook' ) );

// Remove admin header bar
add_filter( 'show_admin_bar', '__return_false' );

// Remove edit link
add_filter( 'edit_post_link', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'edit_post_link' ) );

// Add login/logout link to primary nav
add_filter( 'wp_nav_menu_items', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'wp_nav_menu_items' ), 10, 2 );

// Add styles and scripts
if ( !is_admin() ) {
	add_action( 'wp_enqueue_scripts', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'wp_enqueue_scripts' ) );
}

// Modify registration form
add_action( 'register_form', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'register_form' ) );
add_filter( 'registration_errors', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'registration_errors' ), 10, 3 );
add_action( 'user_register', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'user_register' ) );

// Lost password > redirect to home page
add_filter( 'login_redirect', array( 'Schenkenfelder\\LeitfadenTierwohl\\Hooks', 'login_redirect' ), 10, 3 );

// Shortcode
if( !shortcode_exists( 'leitfaden_tierwohl' ) ) {
	add_shortcode( 'leitfaden_tierwohl', array( 'Schenkenfelder\\LeitfadenTierwohl\\Shortcodes', 'leitfaden_tierwohl' ) );
}

// Don't email login credentials to a newly-registered user
if ( ! function_exists( 'wp_new_user_notification' ) ) {
	function wp_new_user_notification( $user_id, $deprecated = null, $notify = '' ) {
		return;
	}
}