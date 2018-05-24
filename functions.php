<?php  

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'learn' ),
) );

function learn_scripts() {

	wp_enqueue_style( 'learn-bootstrap', get_template_directory_uri(). '/css/bootstrap.css' );

	wp_enqueue_style( 'learn-starter', get_template_directory_uri(). '/css/starter.css' );

	wp_enqueue_style( 'learn-style', get_template_directory_uri(). '/style.css' );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'learn-bootstrapjs', get_template_directory_uri(). '/js/bootstrap.js' );

}

add_action( 'wp_enqueue_scripts', 'learn_scripts' );

require_once get_template_directory() .'/inc/class-wp-bootstrap-navwalker.php';

?>