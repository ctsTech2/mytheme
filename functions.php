
<?php

add_theme_support( 'title-tag' );


function start1_assets() {
	wp_enqueue_style( 'start1-style-reset', get_template_directory_uri() . '/reset.css' );	
	wp_enqueue_style( 'start1-styles', get_stylesheet_uri(), array( 'start1-style-reset' ) );	
	wp_enqueue_style( 'start1-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' );	
}

add_action( 'wp_enqueue_scripts', 'start1_assets' );

?>  