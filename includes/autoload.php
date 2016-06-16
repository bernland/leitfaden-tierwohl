<?php
/**
 * The WordPress core does not provide autoload functionality.
 *
 * @see https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
 */
spl_autoload_register( function( $class ) {
	$prefix = 'Schenkenfelder\\LeitfadenTierwohl\\';
	$base_dir = __DIR__ . '/';
	$len = strlen( $prefix );
	if ( 0 !== strncmp( $prefix, $class, $len ) ) {
		return;
	}
	$relative_class = substr( $class, $len );
	$file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';
	if ( file_exists( $file ) ) {
		require $file;
	}
} );