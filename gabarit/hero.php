<?php 
  $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
?>

<section class="hero">
      <div class="hero__contenu">
        <h1 class="hero__titre">
          <?php bloginfo('name') ?>
        </h1>
        <p class="hero__description">
          <?php bloginfo('description') ?>
        </p>
        <p class="hero__description">info@cmaisonneuve.qc.ca</p>
        <p class="hero__description">3800, rue Sherbrooke, Montreal</p>
        <p class="hero__description">888-888-8888</p>
        <p id="hero__auteur"><?= $hero_auteur ?></p>
        <a href="" class="hero__bouton">S'inscrire</a>
      </div>
</section>