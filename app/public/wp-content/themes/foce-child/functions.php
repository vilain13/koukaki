<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/sass-vs/css/style.css', array(), filemtime(get_stylesheet_directory() . '/sass-vs/css/style.css'));
    wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/add-on/swiper/swiper-bundle.min.css', array() );
} 

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
    wp_enqueue_script( 'scripts-simpleparallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js' );
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/add-on/swiper/swiper-bundle.min.js', array(), '9.2', true );
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/script.js', array(), false, true );
} 


// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

