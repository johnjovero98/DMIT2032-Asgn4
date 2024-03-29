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
    add_theme_support('appearance-tools');
    add_theme_support('border');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => esc_attr__( 'Primary Colour', 'themeLangDomain' ),
            'slug'  => 'primary-colour',
            'color' => '#29942c',
        ),
        array(
            'name'  => esc_attr__( 'Secondary Colour', 'themeLangDomain' ),
            'slug'  => 'secondary-colour',
            'color' => '#000000',
        ),
        array(
            'name'  => esc_attr__( 'White', 'themeLangDomain' ),
            'slug'  => 'white',
            'color' => '#FFFFFF',
        ),
        array(
            'name'  => esc_attr__( 'Light Background', 'themeLangDomain' ),
            'slug'  => 'light-background',
            'color' => '#EBFAEC',
        ),
        array(
            'name'  => esc_attr__( 'Black Background', 'themeLangDomain' ),
            'slug'  => 'black-background',
            'color' => '#4D5053',
        ),
        array(
            'name'  => esc_attr__( 'Brand Light', 'themeLangDomain' ),
            'slug'  => 'brand-light',
            'color' => '#7CBA3B',
        ),
        array(
            'name'  => esc_attr__( 'Dark Background', 'themeLangDomain' ),
            'slug'  => 'dark-background',
            'color' => '#333436')
        ));
    
    add_theme_support('editor-font-sizes', array(
        array(
            'name' => esc_attr__( 'H1', 'themeLangDomain' ),
            'size' => '3.815rem',
            'slug' => 'h1'
        ),
        array(
            'name' => esc_attr__( 'H2', 'themeLangDomain' ),
            'size' => '3.052rem',
            'slug' => 'h2'
        ),
        array(
            'name' => esc_attr__( 'H3', 'themeLangDomain' ),
            'size' => '2.441rem',
            'slug' => 'h3'
        ),
        array(
            'name' => esc_attr__( 'H4', 'themeLangDomain' ),
            'size' => '1.953rem',
            'slug' => 'h4'
        ),
        array(
            'name' => esc_attr__( 'H5', 'themeLangDomain' ),
            'size' => '1.563rem',
            'slug' => 'h5'
        ),
        array(
            'name' => esc_attr__( 'H6', 'themeLangDomain' ),
            'size' => '1.25rem',
            'slug' => 'h6'
        ),
        array(
            'name' => esc_attr__( 'paragraph', 'themeLangDomain' ),
            'size' => '1rem',
            'slug' => 'paragraph'
        ),

    ));

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