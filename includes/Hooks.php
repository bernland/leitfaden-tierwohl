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

	public static function wp_enqueue_scripts() {
		wp_register_style( LEITFADENTIERWOHL_PLUGIN_NAME, plugins_url( LEITFADENTIERWOHL_PLUGIN_NAME . '/css/lftw.css' ) );
		wp_enqueue_style( LEITFADENTIERWOHL_PLUGIN_NAME );

		wp_enqueue_script( LEITFADENTIERWOHL_PLUGIN_NAME, LEITFADENTIERWOHL_ROOT_URL . 'js/lftw.js', [ 'jquery' ], '1.0', false );
	}

	public static function wp_nav_menu_items( $items, $args ) {
		if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
			$items .= '<li><a href="'. wp_logout_url( '/' ) .'">Abmelden</a></li>';
		}
		elseif ( !is_user_logged_in() && $args->theme_location == 'primary' ) {
			$items .= '<li><a href="'. site_url('wp-login.php?redirect_to=/') .'">Anmelden</a></li>';
		}
		return $items;
	}

	function register_form() {
		?>
		<p>
			<label for="user_pass">Passwort<br />
			<input type="password" name="user_pass" id="user_pass" class="input" value="" size="25" /></label>
		</p>
		<p>
			<label for="user_pass">Passwort wiederholen<br />
			<input type="password" name="user_pass1" id="user_pass1" class="input" value="" size="25" /></label>
		</p>
		<style>
			#reg_passmail {
				display: none;
			}
		</style>
		<?php
	}

	function registration_errors( $errors, $sanitized_user_login, $user_email ) {
		if ( empty( $_POST['user_pass'] ) || !empty( $_POST['user_pass'] ) && trim( $_POST['user_pass'] ) == '' ) {
			$errors->add( 'user_pass_error', '<strong>Fehler</strong>: Bitte geben Sie ein Passwort ein.' );
		} else {
			if ( $_POST['user_pass'] !== $_POST['user_pass1'] ) {
				$errors->add( 'user_pass_error', '<strong>Fehler</strong>: Die Passwörter stimmen nicht überein.' );
			}
		}

		return $errors;
	}

	function user_register( $user_id ) {
		if ( !empty( $_POST['user_pass'] ) && trim( $_POST['user_pass'] ) != '' && $_POST['user_pass'] == $_POST['user_pass1'] ) {
			wp_set_password( $_POST['user_pass'], $user_id );

			wp_setcookie( $_POST['user_login'], $_POST['user_pass'], true );
			wp_set_current_user( $user_id, $_POST['user_login'] );
			do_action( 'wp_login', $user_id );

			wp_redirect( home_url() ); exit;
		}
	}

	function login_redirect( $redirect_to, $request, $user ) {
		if ( strpos( $redirect_to, 'wp-admin' ) !== false ) {
			if ( isset( $user->roles ) && is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) {
				return '/wp-admin/';
			} else {
				return '/';
			}
		}

		return $redirect_to;
	}

}