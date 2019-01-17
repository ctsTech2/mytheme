
<?php

add_theme_support( 'title-tag' );

register_nav_menus ( array(
	'header-menu' => 'Our Awesome Header Menu',
) );


function start1_assets() {
	wp_enqueue_style( 'start1-style-reset', get_template_directory_uri() . '/reset.css' );	
	wp_enqueue_style( 'start1-styles', get_stylesheet_uri(), array( 'start1-style-reset' ) );	
	wp_enqueue_style( 'start1-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' );	
}

add_action( 'wp_enqueue_scripts', 'start1_assets' );


add_action( 'widgets_init', 'start1_widget_areas' );
function start1_widget_areas() {
	register_sidebar ( array(
		'name' => 'Theme Sidebar',
		'id' => 'start1-sidebar',
		'description' => 'The main sidebar shown on the right in our awesome theme',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}

?>  