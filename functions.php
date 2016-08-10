<?php

if (!function_exists('nashestvie_setup')):

	function nashestvie_setup() {
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		));

		add_theme_support( 'post-thumbnails');
		add_theme_support('category-thumbnails');
	}

endif; 
add_action( 'after_setup_theme', 'nashestvie_setup' );

//preview
add_filter('excerpt_more', function($more) {
	return '...';
});


function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}

//remove wraps
remove_filter( 'the_excerpt', 'wpautop' );

/* Кастомные  стили/скрипты */
if ( !is_admin() ) {
	function nashestvie_scripts() {
    wp_enqueue_script( 'mdl_js',get_template_directory_uri().'/css/material.min.js');
    wp_enqueue_style( 'css_mdl', get_template_directory_uri().'/css/material.min.css');
    wp_enqueue_style( 'css_mdli', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style( 'css_main', get_template_directory_uri().'/css/main.css');
    wp_enqueue_script( 'plugins_js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), true );
    wp_enqueue_script( 'js', get_template_directory_uri() . '/js/main.js', array('jquery'), true );
	}
	
	add_action( 'wp_enqueue_scripts', 'nashestvie_scripts' );
}

register_nav_menus(array(
  'main_menu' => 'Главное меню',
));
