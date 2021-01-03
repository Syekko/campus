<?php
/**
 * Functions.
 *
 * @package Page Builder Framework Child
 */

defined( "ABSPATH" ) || die( "Can't access directly" );

/**
 * Child theme setup.
 */
function wpbf_child_theme_setup() {

	// Textdomain.
	load_child_theme_textdomain( 'page-builder-framework-child', WPBF_CHILD_THEME_DIR . '/languages' );

}
add_action( 'after_setup_theme', 'wpbf_child_theme_setup' );

/**
 * Enqueue scripts & styles.
 */
function wpbf_child_scripts() {

	// Styles.
	wp_enqueue_style( 'wpbf-style-child', WPBF_CHILD_THEME_URI . '/style.css', false, WPBF_CHILD_VERSION );

	// Scripts (uncomment if needed).
	// wp_enqueue_script( 'wpbf-site-child', WPBF_CHILD_THEME_URI . '/js/site-child.js', false, WPBF_CHILD_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'wpbf_child_scripts', 13 );

function my_theme_setup() {
  	
  	// Nouveauté à ajouter
  	add_theme_support('editor-styles');
  
	// Puis la même fonction qu'on utilisait auparavant pour Tiny MCE
	add_editor_style( 'style-editor.css' );
  
  	// Éventuellement pour prendre en compte les blocs larges
  	add_theme_support( 'align-wide' );
  
}
add_action( 'after_setup_theme', 'my_theme_setup' );

/* filtrage */  

add_action('init', function(){
  add_theme_support('post-thumbnails'); 
});

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/sorting.js', '', '', true);
});
