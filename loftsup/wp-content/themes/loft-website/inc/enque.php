<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0' );
}

function default_css_styles() {

    wp_enqueue_script('jquery');
    wp_enqueue_style('default-style', get_stylesheet_directory_uri() .'/CSS/style.css');
    wp_enqueue_style('default', get_stylesheet_directory_uri() .'/CSS/media.css');
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', false ); 
    

    wp_enqueue_script( 'loft-website', get_template_directory_uri() . '/JS/script.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'loft-web', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA157quXbUlHHgm4wJJxzD49MivKgPSil8', array(), _S_VERSION, true );
    }
    add_action('wp_enqueue_scripts', 'default_css_styles');
?>
