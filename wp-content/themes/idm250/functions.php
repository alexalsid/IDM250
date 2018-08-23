<?php 

function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation'),
        'footer' => __('Footer Navigation'),
    ]);
}

add_action('init', 'register_menus');




function wpdocs_theme_name_scripts() {

    wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_style( 'header', get_template_directory_uri() . '/dist/css/header.css');
    wp_enqueue_style( 'general', get_template_directory_uri() . '/dist/css/style.css');
    
};


add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


add_theme_support('post-thumbnails');



