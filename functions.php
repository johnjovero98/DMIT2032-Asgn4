<?php 
function hml_classic_jj_enqueue_styles() {
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


function hml_classic_jj_theme_setup() {
    add_theme_support( 'custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
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

    register_nav_menus(array(
        'header' => 'Display this menu in the header',
        'footer' => 'Display this menu in the footer',
    ));
}
add_action('after_setup_theme','hml_classic_jj_theme_setup');


function hml_classic_jj_register_sidebars() {
    register_sidebar( array(
        'name' => 'Social Media Links',
        'id' => 'footer-column-1',
        'description' => 'Widgets for social media links',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));

    register_sidebar( array(
        'name' => 'Website Links',
        'id' => 'footer-column-2',
        'description' => 'Widgets for websites links',
        'before_widget' => '<div>',
        'after_widget' => '</div>'

    ));
}

add_action('widgets_init','hml_classic_jj_register_sidebars');
