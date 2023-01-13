<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/ForTest.css' );

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'ForTest', get_template_directory_uri() . '/assets/ForTest.js', array('jquery'),'null',  true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');





?>