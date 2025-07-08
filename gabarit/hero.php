<?php 
  $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
  $hero_email = get_theme_mod('hero_email', 'Default Title');
  $hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
  $hero_telephone = get_theme_mod('hero_telephone', 'Default Title');
  $hero_bouton = get_theme_mod('hero_bouton', 'Default Title');
  $hero_bouton_lien = get_theme_mod('hero_bouton_lien', 'Default Title');
  $hero_background[0] = get_theme_mod('hero_background_image_0', get_template_directory_uri());
  $hero_background[1] = get_theme_mod('hero_background_image_1', get_template_directory_uri());
  $hero_background[2] = get_theme_mod('hero_background_image_2', get_template_directory_uri());

  $hero_couleur_texte = get_theme_mod('hero_couleur_texte');
  $hero_couleur_icone = get_theme_mod('hero_couleur_icone');
?>
<style>
  .hero__contenu {
    color: <?= $hero_couleur_texte ?>;
  }
</style>

<!-- https://developer.wordpress.org/reference/functions/esc_url/ -->
<section class="hero">
  <div class="carrousel" style="background-image: url('<?php echo esc_url($hero_background[0]); ?>'); opacity:1;"></div>
  <div class="carrousel" style="background-image: url('<?php echo esc_url($hero_background[1]); ?>'); opacity:0;"></div>
  <div class="carrousel" style="background-image: url('<?php echo esc_url($hero_background[2]); ?>'); opacity:0;"></div>

  <div class="hero__contenu">
    <h1 class="hero__titre">
      <?php echo bloginfo('name') ?>
    </h1>
    <p class="hero__description">
      <?php bloginfo('description') ?>
    </p>
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
