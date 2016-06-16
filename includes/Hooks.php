<?php

namespace Schenkenfelder\LeitfadenTierwohl;

class Hooks {

	public static function wp_loaded() {
		session_start();
	}

	public static function register_activation_hook() {
		global $wpdb;

		/* Tables */

		// Background
		$sql_lftw_userbg = str_replace( LEITFADENTIERWOHL_TABLE_USERBG, $wpdb->prefix . LEITFADENTIERWOHL_TABLE_USERBG, file_get_contents( LEITFADENTIERWOHL_ROOT_DIR . 'sql/' . LEITFADENTIERWOHL_TABLE_USERBG . '.sql' ) );
		// Results
		$sql_lftw_results = str_replace( LEITFADENTIERWOHL_TABLE_RESULTS, $wpdb->prefix . LEITFADENTIERWOHL_TABLE_RESULTS, file_get_contents( LEITFADENTIERWOHL_ROOT_DIR . 'sql/' . LEITFADENTIERWOHL_TABLE_RESULTS . '.sql' ) );

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql_lftw_userbg );
		dbDelta( $sql_lftw_results );

	}

	public static function edit_post_link() {
		return '';
	}

}