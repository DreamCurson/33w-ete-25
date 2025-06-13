<link rel="stylesheet" href="style.css" />
<?php get_header(); ?>
<h2>Résultat de la recherche</h2>

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
<script src="script/checkbox.js"></script>