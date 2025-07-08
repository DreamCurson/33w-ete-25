<?php

function mon_theme_supports() {
    add_theme_support('post-thumbnails');
    add_image_size('custom-wide', 489, 120, true);
    add_image_size('custom-flex', 700, 120, true);
    add_image_size('custom-large', 9999, 300, true);
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 75,
        'width'       => 75,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function custom_logo_class( $html ) {
    if ( strpos( $html, '<img' ) !== false ) {
        $html = str_replace( '<img', '<img class="entete__logo"', $html );
    }
    return $html;
}
add_filter( 'get_custom_logo', 'custom_logo_class' );

function theme_tp_enqueue_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');

    $css_path = get_template_directory() . '/style.css';
    $css_url = get_template_directory_uri() . '/style.css';

    wp_enqueue_style(
        'main-style',
        $css_url,
        array(),
        filemtime($css_path),
        null
    );
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

function mon_theme_ajouter_scripts() {
    $checkbox_script_path = get_template_directory() . '/script/checkbox.js';
    $checkbox_script_url  = get_template_directory_uri() . '/script/checkbox.js';

    $animation_script_path = get_template_directory() . '/script/animation-hero.js';
    $animation_script_url  = get_template_directory_uri() . '/script/animation-hero.js';

    wp_enqueue_script(
        'mon-script-checkbox',    
        $checkbox_script_url,                 
        array(),                            
        filemtime($checkbox_script_path),     
        true                                   
    );

    wp_enqueue_script(
        'mon-script-animation-hero',       
        $animation_script_url,   
        array(),                   
        filemtime($animation_script_path),   
        true                 
    );
}

add_action('wp_enqueue_scripts', 'mon_theme_ajouter_scripts');


?>
