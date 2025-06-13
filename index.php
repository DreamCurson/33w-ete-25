<link rel="stylesheet" href="style.css" />
<?php get_header(); ?>

<section class="populaire">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="populaire__article">
        <div class="populaire__thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
        <h2><?php the_title(); ?></h2>
        <div class="populaire__texte"><?php 
            echo wp_trim_words(get_the_excerpt());
        ?></div>
    </article>
    <?php endwhile; endif; ?>
    </section>


 <section class="galerie">
  <h3>Nos destinations favorites</h3>
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

<?php get_footer(); ?>
<script src="script/checkbox.js"></script>