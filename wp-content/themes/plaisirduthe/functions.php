<?php 

add_theme_support( 'post-thumbnails' );

add_theme_support( 'title-tag' );

function main_style() {
  
    wp_enqueue_style('style-personnalise', get_template_directory_uri() . './assets/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style-personnalise', get_template_directory_uri() . './assets/css/custom-colors.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'main_style');

add_theme_support( 'title-tag' );

register_nav_menus( array
                    (
                        'main' => 'Menu Principal', 
                        'footer' => 'Bas de page', 
                    ) );
