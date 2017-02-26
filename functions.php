<?php

//load script
function load_file()
{
	wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'load_file');



//---the_excerpt
function get_excerpt_length(){
	return 5;
}

function return_excerpt_text(){
	return '...';
}

add_filter( 'excerpt_more' , 'return_excerpt_text' );
add_filter( 'excerpt_length' , 'get_excerpt_length' );

function init_setup() {

	register_nav_menus(array(
	'main_menu' => 'Menu Utama' , 
	'footer_menu' => 'Menu Footer'
	));
	
	
	add_theme_support('post-thumbnails');
	add_image_size('small_thumb', 500, 250, true);
	add_image_size('big_thumb', 700, 300, true);

	//---format post : - gallery
	add_theme_support('post-formats', array('aside', 'gallery') );
}

add_action('after_setup_theme', 'init_setup');

//----widgets
function widget_setup() {
	register_sidebar(array(
		'name' => "sidebar pertama",
		'id' => "sidebar1"
		));

	register_sidebar(array(
		'name' => "sidebar kedua",
		'id' => "sidebar2"
		));
}

add_action('widgets_init', 'widget_setup');

?>