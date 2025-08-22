<?php
$erreur404_titre = get_theme_mod('erreur404_titre', 'Default Title');
$erreur404_description = get_theme_mod('erreur404_description', 'Default Title');
$erreur404_couleur_texte = get_theme_mod('erreur404_couleur_texte');
$erreur404_couleur_bouton_accueil = get_theme_mod('erreur404_couleur_bouton_accueil');
$erreur404_couleur_texte_accueil = get_theme_mod('erreur404_couleur_texte_accueil');
$erreur404_couleur_bouton_destination = get_theme_mod('erreur404_couleur_bouton_destination');
$erreur404_couleur_texte_destination = get_theme_mod('erreur404_couleur_texte_destination');
$erreur404_couleur_recherche = get_theme_mod('erreur404_couleur_recherche');
?>

<style>
    .erreur404__textes{
        color: <?= $erreur404_couleur_texte ?>;
    }
    .erreur404__accueil{
        background-color: <?= $erreur404_couleur_bouton_accueil ?>;
        color: <?= $erreur404_couleur_texte_accueil ?>;
    }
    .erreur404__button{
        background-color: <?= $erreur404_couleur_bouton_destination ?>;
        color: <?= $erreur404_couleur_texte_destination ?>;
    }

    .erreur404__recherche_input {
        border-bottom: 2px solid <?= $erreur404_couleur_recherche ?>;
        color: <?= $erreur404_couleur_recherche ?>;
    }
    .erreur404__recherche_input::placeholder {
        color: <?= $erreur404_couleur_recherche ?>;
    }
</style>

<div class="erreur404">
    <div class="erreur404__textes">
        <h1 class="erreur404__titre"><?= $erreur404_titre ?></h1>
        <p class="erreur404__description"><?= $erreur404_description ?></p>
    </div>

    <a href="<?php echo home_url(); ?>" class="erreur404__accueil">Retour à l'accueil</a>

    <div class="erreur404__destinations">
        <a href="<?php echo esc_url(home_url('/destination/costa-rica')); ?>" class="erreur404__button">Costa Rica</a>
        <a href="<?php echo esc_url(home_url('/destination/alaska')); ?>" class="erreur404__button">Alaska</a>
        <a href="<?php echo esc_url(home_url('/destination/iles-feroe')); ?>" class="erreur404__button">Îles Féroé</a>
        <a href="<?php echo esc_url(home_url('/destination/paris')); ?>" class="erreur404__button">Paris, France</a>
    </div>

    <form class="erreur404__recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <label>
            <input class="erreur404__recherche_input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
        </label>
    </form>
</div>
