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

    /* --- Couleur Texte --- */
    $wp_customize->add_setting('hero_couleur_texte', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur_texte', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'hero_section',
    )));

     /* --- Couleur Icone --- */
    $wp_customize->add_setting('hero_couleur_icone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur_icone', array(
        'label' => __('Couleur des icones', 'theme_31w'),
        'section' => 'hero_section',
    )));

    /* -------- Section Gallerie -------- */
    $wp_customize->add_section('gallerie_section', array(
    'title'    => __('Section Galerie', 'theme_31w'),
    'priority' => 30,
    ));

    $default_images = [
        'beach-418742_640.jpg',
        'desert-4428269_640.jpg',
        'lighthouse-7250229_640.jpg',
        'mountainous-5942962_640.jpg',
        'mountains-6865752_640.jpg',
        'mountains-736886_640.jpg',
        'ocean-4270249_640.jpg',
        'riverbank-7885727_640.jpg',
        'snow-7646952_640.jpg',
        'trees-4896953_640.jpg',
    ];

    for ($i = 1; $i <= 10; $i++) {
        $setting_id = 'gallerie_image_' . $i;
        $default_url = get_template_directory_uri() . '/images/grid/' . $default_images[$i - 1];

        $wp_customize->add_setting($setting_id, array(
            'default'           => $default_url,
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting_id, array(
            'label'    => __("Image $i", 'theme_31w'),
            'section'  => 'gallerie_section',
            'settings' => $setting_id,
        )));
    }
 

    /* -------- Section Pied de page -------- */
    $wp_customize->add_section('piedpage_section', array(
        'title' => __('Section Footer', 'theme_31w'),
        'priority' => 30,
    ));
 
    /* --- Auteur --- */
    $wp_customize->add_setting('piedpage_auteur', array(
        'default' => __('© Élodie Buczkowski - 2025', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('piedpage_auteur', array(
        'label' => __('L\'auteur du site', 'theme_31w'),
        'section' => 'piedpage_section',
        'type' => 'text',
    ));
    
    /* --- Email --- */
    $wp_customize->add_setting('piedpage_email', array(
        'default' => __('e2495224@cmaissoneuve.qc.ca', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('piedpage_email', array(
        'label' => __('L\'email du site', 'theme_31w'),
        'section' => 'piedpage_section',
        'type' => 'text',
    ));

    /* --- Numéro de téléphone --- */
    $wp_customize->add_setting('piedpage_phone', array(
        'default' => __('888-888-8888', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('piedpage_phone', array(
        'label' => __('Le numéro de téléphone', 'theme_31w'),
        'section' => 'piedpage_section',
        'type' => 'text',
    ));
    $piedpage_phone = get_theme_mod('piedpage_phone', 'Default Title');

    /* --- Couleur Arrière plan --- */
    $wp_customize->add_setting('piedpage_couleur_fond', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'piedpage_couleur_fond', array(
        'label' => __('Couleur du fond', 'theme_31w'),
        'section' => 'piedpage_section',
    )));

    /* --- Couleur Icone --- */
    $wp_customize->add_setting('piedpage_couleur_icone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'piedpage_couleur_icone', array(
        'label' => __('Couleur des icones', 'theme_31w'),
        'section' => 'piedpage_section',
    )));

    
}

add_action('customize_register', 'theme_31w_customize_register');