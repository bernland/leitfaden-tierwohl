<?php

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

// Drop DB Tables
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS " . LEITFADENTIERWOHL_TABLE_USERBG );
$wpdb->query( "DROP TABLE IF EXISTS " . LEITFADENTIERWOHL_TABLE_RESULTS );