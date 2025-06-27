<?php 
  $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
  $hero_email = get_theme_mod('hero_email', 'Default Title');
  $hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
  $hero_telephone = get_theme_mod('hero_telephone', 'Default Title');
  $hero_bouton = get_theme_mod('hero_bouton', 'Default Title');
  $hero_bouton_lien = get_theme_mod('hero_bouton_lien', 'Default Title');
  $hero_background_image = get_theme_mod('hero_background_image', get_template_directory_uri());
?>

<!-- https://developer.wordpress.org/reference/functions/esc_url/ -->
<section class="hero" style="background-image: url('<?php echo esc_url($hero_background_image); ?>');">            
  <div class="hero__contenu">
    <h1 class="hero__titre">
      <?php bloginfo('name') ?>
    </h1>
    <p class="hero__description">
      <?php bloginfo('description') ?>
    </p>
    <p class="hero__description"><?= $hero_email ?></p>
    <p class="hero__description"><?= $hero_adresse ?></p>
    <p class="hero__description"><?= $hero_telephone ?></p>
    <p id="hero__auteur"><?= $hero_auteur ?></p>
    <a href="<?= $hero_bouton_lien ?>" class="hero__bouton"><?= $hero_bouton ?></a>
  </div>
</section>