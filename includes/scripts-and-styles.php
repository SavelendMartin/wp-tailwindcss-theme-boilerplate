<?php


use SavelendGroupTheme\AssetResolver;


add_action( 'wp_enqueue_scripts', function () {

	// registers scripts and stylesheets
	wp_register_style( 'app', AssetResolver::resolve( 'css/app.css' ), [], false );
	wp_register_script( 'app', AssetResolver::resolve( 'js/app.js' ), [], false, true );

	// enqueue global assets
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'app' );
	wp_enqueue_script( 'app' );

} );


/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {

	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added

    add_editor_style( AssetResolver::resolve( 'css/editor.css' ) );
}
add_action( 'after_setup_theme', 'wpdocs_theme_add_editor_styles' );