<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_email = get_theme_mod('hero_email', 'Default Title');
$hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
$hero_telephone = get_theme_mod('hero_telephone', 'Default Title');
$hero_bouton = get_theme_mod('hero_bouton', 'Default Title');
$hero_bouton_lien = get_theme_mod('hero_bouton_lien', 'Default Title');
$hero_couleur_texte = get_theme_mod('hero_couleur_texte');
$hero_couleur_icone = get_theme_mod('hero_couleur_icone');

$image_count = get_theme_mod('hero_background_image_count', 3);
$hero_background_images = [];

for ($i = 0; $i < $image_count; $i++) {
    $hero_background_images[] = get_theme_mod('hero_background_image_' . $i, get_template_directory_uri() . '/images/acores.jpg');
}

?>

<style>
  .hero__contenu {
    color: <?= $hero_couleur_texte ?>;
  }
</style>

<section class="hero">
  <?php afficher_carrousel($hero_background_images); ?>

  <div class="hero__contenu">
    <h1 class="hero__titre"><?php echo bloginfo('name') ?></h1>
    <p class="hero__description"><?php bloginfo('description') ?></p>
    <p class="hero__description"><?= $hero_email ?></p>
    <p class="hero__description"><?= $hero_adresse ?></p>
    <p class="hero__description"><?= $hero_telephone ?></p>
    <p id="hero__auteur"><?= $hero_auteur ?></p>
    <div class="hero__description hero_sociaux">
      <?php icone_sociaux($hero_couleur_icone) ?>
    </div>
    <a href="<?= $hero_bouton_lien ?>" class="hero__bouton"><?= $hero_bouton ?></a>
  </div>
</section>