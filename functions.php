<?php

function proovitoo_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());


}

add_action('wp_enqueue_scripts', 'proovitoo_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'middle' => __('Middle Menu'),
	'footer' => __( 'Footer Menu'),
));

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

function widgets_init() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1'
	));

	register_sidebar( array(
		'name' => 'Telnr',
		'id' => 'telefon1'
	));

	register_sidebar( array(
		'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item1">',
		'after_widget' => '</div>'
	));

	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item2">',
		'after_widget' => '</div>'
	));

	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item3">',
		'after_widget' => '</div>'
	));

}
add_action( 'widgets_init', 'widgets_init');
add_theme_support ('custom-logo', array(
		'height' => 150,
		'width' => 350,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array( 'site-title', 'site-description'),
	));