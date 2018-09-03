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

    if (is_404()) {

         wp_enqueue_style( '404', get_template_directory_uri() . '/dist/css/404.css');


    } elseif (is_page('Post Listing')) {
         wp_enqueue_style( 'single', get_template_directory_uri() . '/dist/css/single.css');
    };
    
};


add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );



function register_widgets()
{
    register_sidebar([
        'name'          => 'Blog Sidebar',
        'id'            => 'sidebar',
    ]);
}

add_action('widgets_init', 'register_widgets');



add_theme_support('post-thumbnails');








