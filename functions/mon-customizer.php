<?php

function theme_31w_customize_register($wp_customize) {
    /* -------- Section Héro -------- */
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Héro - Accueil', 'theme_31w'),
        'priority' => 30,
    ));

    /* --- Auteur --- */
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Élodie Buczkowski', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Le nom de l\'auteur', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    
}

add_action('customize_register', 'theme_31w_customize_register');