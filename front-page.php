    <?php get_header(); ?>
    <section class="hero">
      <div class="hero__contenu">
        <h1 class="hero__titre">Club de voyage</h1>
        <p class="hero__description">
          Partez à la découverte de lieux extraordinaires où se mêlent plages
          sauvages, montagnes majestueuses et villages authentiques.
        </p>
        <p class="hero__description">info@cmaisonneuve.qc.ca</p>
        <p class="hero__description">3800, rue Sherbrooke, Montreal</p>
        <p class="hero__description">888-888-8888</p>
        <a href="" class="hero__bouton">S'inscrire</a>
      </div>
    </section>
    <section class="formulaire">
      <div class="formulaire__section">
        <form class="formulaire__form">
          <div class="formulaire__field">
            <label for="nom" class="formulaire__label">Nom :</label>
            <input
              type="text"
              id="nom"
              name="nom"
              class="formulaire__input"
              placeholder="Écrivez votre nom"
              required
            />
          </div>

          <div class="formulaire__field">
            <label for="prenom" class="formulaire__label">Prénom :</label>
            <input
              type="text"
              id="prenom"
              name="prenom"
              class="formulaire__input"
              placeholder="Écrivez votre prénom"
              required
            />
          </div>

          <div class="formulaire__field">
            <label for="courriel" class="formulaire__label">Courriel :</label>
            <input
              type="email"
              id="courriel"
              name="courriel"
              class="formulaire__input"
              placeholder="Écrivez votre courriel"
              required
            />
          </div>

          <div class="formulaire__field">
            <label for="telephone" class="formulaire__label">Téléphone :</label>
            <input
              type="tel"
              id="telephone"
              name="telephone"
              class="formulaire__input"
              placeholder="Écrivez votre téléphone"
              required
            />
          </div>

          <button type="submit" class="formulaire__bouton">S'INSCRIRE</button>
        </form>
      </div>
    </section>

 <section class="galerie">
  <h2>Nos destinations favorites</h2>
  <div class="galerie__images">
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/beach-418742_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/desert-4428269_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/lighthouse-7250229_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/mountainous-5942962_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/mountains-6865752_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/mountains-736886_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/ocean-4270249_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/riverbank-7885727_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/snow-7646952_640.jpg" alt="" class="galerie__image" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/grid/trees-4896953_640.jpg" alt="" class="galerie__image" />
  </div>
</section>


    <section class="populaire">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="populaire__article">
        <div class="populaire__thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
        <h2><?php the_title(); ?></h2>
        <div class="populaire__texte"><?php 
            $lien ="<a href=" . get_permalink() . ">Suite...</a>";
            echo wp_trim_words(get_the_excerpt(), 10, " " . $lien);
        ?></div>
    </article>
    <?php endwhile; endif; ?>
    </section>
    <?php get_footer(); ?>
  </body>
  <script src="script/checkbox.js"></script>