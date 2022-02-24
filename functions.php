<?php 

add_action( 'wp_enqueue_scripts', 'timber_style' );
add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_style() {
    
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function timber_scripts() {

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'magnific-script', get_template_directory_uri() .'/assets/jquery.magnific-popup.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/jquery.main.js', array('jquery'), null, true );
}