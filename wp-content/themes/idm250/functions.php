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
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js');
    // fix later wp_enqueue_style( 'general', get_template_directory_uri() . '/dist/css/style.css');
    

    if (is_404()) {

         wp_enqueue_style( '404', get_template_directory_uri() . '/dist/css/404.css');


    } elseif (is_page('Post Listing')) {

         wp_enqueue_style( 'projects', get_template_directory_uri() . '/dist/css/projects.css');

    } elseif (is_front_page()) {

        wp_enqueue_style( 'front', get_template_directory_uri() . '/dist/css/main.css');

    } elseif(is_page('about')) {

    wp_enqueue_style( 'about-css', get_template_directory_uri() . '/dist/css/about.css');

    } elseif (is_page('contact')) {
        wp_enqueue_style( 'contact', get_template_directory_uri() . '/dist/css/contact.css');
    } elseif(is_single()) {

        wp_enqueue_style( 'single', get_template_directory_uri() . '/dist/css/single.css');
        wp_enqueue_script('single-script', get_template_directory_uri() . '/dist/js/single.js');
    } elseif(is_search()) {

        wp_enqueue_style( 'search-results', get_template_directory_uri() . '/dist/css/search_results.css');
}
    
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








