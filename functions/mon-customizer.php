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

    // CARROUSEL 
    $wp_customize->add_setting('hero_background_image_count', array(
    'default'           => 3,
    'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('hero_background_image_count', array(
        'label'   => __('Nombre d\'images de fond', 'theme_31w'),
        'section' => 'hero_section',
        'type'    => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
        ),
    ));

    $image_count = get_theme_mod('hero_background_image_count', 3); 

    for ($i = 0; $i < $image_count; $i++) {
        $wp_customize->add_setting('hero_background_image_' . $i, array(
            'default'           => get_template_directory_uri() . '/images/acores.jpg',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image_' . $i, array(
            'label'    => __('Image de fond ' . ($i+1), 'theme_31w'),
            'section'  => 'hero_section',
            'settings' => 'hero_background_image_' . $i,
        )));
    }

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

    // Page 404 
    $wp_customize->add_section('erreur_404', array(
        'title' => __('Erreur 404', 'theme_31w'),
        'priority' => 30,
    ));

    /* --- Titre --- */
    $wp_customize->add_setting('erreur404_titre', array(
        'default' => __('Oops, vous avez échoué sur l\'île 404 !', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('erreur404_titre', array(
        'label' => __('Titre de la page', 'theme_31w'),
        'section' => 'erreur_404',
        'type' => 'text',
    ));

    /* --- description --- */
    $wp_customize->add_setting('erreur404_description', array(
        'default' => __('Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur \'Accueil\' pour découvrir à nouveau nos voyages d\’exception !', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('erreur404_description', array(
        'label' => __('Description de la page', 'theme_31w'),
        'section' => 'erreur_404',
        'type' => 'text',
    ));

    /* --- Couleur Textes --- */
    $wp_customize->add_setting('erreur404_couleur_texte', array(
        'default' => '#ffb300ff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur404_couleur_texte', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'erreur_404',
    )));

    /* --- Couleur bouton accueil --- */
    $wp_customize->add_setting('erreur404_couleur_bouton_accueil', array(
        'default' => '#ffe100ff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur404_couleur_bouton_accueil', array(
        'label' => __('Couleur du bouton d\'accueil', 'theme_31w'),
        'section' => 'erreur_404',
    )));

    /* --- Couleur texte bouton accueil --- */
    $wp_customize->add_setting('erreur404_couleur_texte_accueil', array(
        'default' => '#111111ff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur404_couleur_texte_accueil', array(
        'label' => __('Couleur du texte du bouton d\'accueil', 'theme_31w'),
        'section' => 'erreur_404',
    )));

    /* --- Couleur bouton destinations --- */
    $wp_customize->add_setting('erreur404_couleur_bouton_destination', array(
        'default' => '#ffe100ff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur404_couleur_bouton_destination', array(
        'label' => __('Couleur des boutons de destination', 'theme_31w'),
        'section' => 'erreur_404',
    )));

    /* --- Couleur texte boutons destination --- */
    $wp_customize->add_setting('erreur404_couleur_texte_destination', array(
        'default' => '#111111ff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur404_couleur_texte_destination', array(
        'label' => __('Couleur du texte des bouton de destination', 'theme_31w'),
        'section' => 'erreur_404',
    )));

    /* --- Couleur recherche --- */
    $wp_customize->add_setting('erreur404_couleur_recherche', array(
        'default' => '#ffe100ff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur404_couleur_recherche', array(
        'label' => __('Couleur de la recherche', 'theme_31w'),
        'section' => 'erreur_404',
    )));

}

add_action('customize_register', 'theme_31w_customize_register');