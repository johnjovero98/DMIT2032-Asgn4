<?php 
function hml_classic_jj_enqueue_styles() {
    wp_enqueue_style(       
        'heading-font',  
        'https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap',  
        array(),        
        false,
    );
    wp_enqueue_style(       
        'body-font',  
        'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',  
        array(),        
        false,
    );

    wp_enqueue_style(
        'hml-custom-style',
        'style.css',
        array(),
        false,
        'all'
    );
    
    wp_enqueue_style(
        'main-stylesheet',
        get_stylesheet_uri(),
        array('hml-custom-style'),
        '1.0',
        'all'
    );         
}
add_action('wp_enqueue_scripts', 'hml_classic_jj_enqueue_styles');

function hml_classic_jj_enqueue_scripts() {
    wp_enqueue_script(
        'hml-custom-script',
        get_template_directory_uri() . '/assets/js/index.js',
        array(),
        '1.0',
        true
    );         
}

add_action('wp_enqueue_scripts', 'hml_classic_jj_enqueue_scripts');

function hml_classic_jj_theme_setup() {
    add_theme_support( 'custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header' => 'Display this menu in the header',
        'footer' => 'Display this menu in the footer',
    ));
}
add_action('after_setup_theme','hml_classic_jj_theme_setup');


function hml_classic_jj_register_sidebars() {


    register_sidebar( array(
        'name' => 'Services Links',
        'id' => 'services-links-widgets',
        'description' => 'Widgets for websites links',
        'before_widget' => '<div>',
        'after_widget' => '</div>'

    ));

    register_sidebar( array(
        'name' => 'Explore Links',
        'id' => 'explore-links-widgets',
        'description' => 'Widgets for websites links',
        'before_widget' => '<div>',
        'after_widget' => '</div>'

    ));

    register_sidebar( array(
        'name' => 'Home Page Widgets',
        'id' => 'home-page-widgets',
        'description' => 'Widgets for homepage',
        'before_widget' => '<div class="home-widgets">',
        'after_widget' => '</div>'
    ));
}

add_action('widgets_init','hml_classic_jj_register_sidebars');


function hml_classic_jj_custom_excerpt_length() {
    return 15;
}
add_filter( 'excerpt_length', 'hml_classic_jj_custom_excerpt_length' );