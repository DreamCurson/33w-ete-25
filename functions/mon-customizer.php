<?php

function theme_31w_customize_register($wp_customize) {
    /* -------- Section Héro -------- */
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Héro - Accueil', 'theme_31w'),
        'priority' => 30,
    ));
 
    /* --- Email --- */
    $wp_customize->add_setting('hero_email', array(
        'default' => __('info@cmaisonneuve.qc.ca', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_email', array(
        'label' => __('L\'email de la companie', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    $hero_email = get_theme_mod('hero_email', 'Default Title');

    /* --- Adresse --- */
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('3800, rue Sherbrooke, Montreal', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('L\'adresse de la companie', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    $hero_adresse = get_theme_mod('hero_adresse', 'Default Title');

    /* --- Telephone --- */
    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('888-888-8888', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Le numéro de téléphone de la compagnie', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    $hero_telephone = get_theme_mod('hero_telephone', 'Default Title');

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

    /* --- Bouton contenu --- */
    $wp_customize->add_setting('hero_bouton', array(
        'default' => __('S\'inscrire', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_bouton', array(
        'label' => __('Texte dans le contenu du bouton', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    $hero_bouton = get_theme_mod('hero_bouton', 'Default Title');

    /* --- Bouton lien --- */
    $wp_customize->add_setting('hero_bouton_lien', array(
        'default' => __('#', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_bouton_lien', array(
        'label' => __('Lien du bouton', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    $hero_bouton_lien = get_theme_mod('hero_bouton', 'Default Title');

    /* --- Background image --- */
    $wp_customize->add_setting('hero_background_image', array(
        'default' => get_template_directory_uri() . '/images/acores.jpg', 
        'sanitize_callback' => 'esc_url_raw',
    ));

    // https://developer.wordpress.org/reference/classes/wp_customize_image_control/
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label' => __('Image de fond', 'theme_31w'),
        'section' => 'hero_section',
        'settings' => 'hero_background_image',
    )));
     $hero_background_image = get_theme_mod('hero_background_image', get_template_directory_uri() );
}

add_action('customize_register', 'theme_31w_customize_register');