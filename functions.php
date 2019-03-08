<?php 

function token_scripts() {
	wp_enqueue_style('bulma.css', get_template_directory_uri().'/css/bulma.css');
	wp_enqueue_style('slick.css', get_template_directory_uri().'/node_modules/slick/slick.css');
	wp_enqueue_style('slick-theme.css', get_template_directory_uri().'/node_modules/slick/slick-theme.css');
	wp_enqueue_style('style.css', get_stylesheet_uri());
	wp_enqueue_style('font-awesome.css', get_template_directory_uri().'/node_modules/font-awesome-4.7.0/css/font-awesome.min.css
');

}

add_action( "wp_enqueue_scripts", "token_scripts");


function register_my_menu() {
	register_nav_menu('header-menu-list', __('Header Menu'));
}

add_action('init', 'register_my_menu');


?>