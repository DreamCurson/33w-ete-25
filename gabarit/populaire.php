<article class="populaire__article">
    <div class="populaire__thumbnail">
        <?php the_post_thumbnail('custom-flex'); ?>
    </div>
    <h2><?php the_title(); ?></h2>
    <div class="populaire__texte">
        <?php 
        $lien = "<a href=" . get_permalink() . ">Suite...</a>";
        $excerpt = wp_trim_words(get_the_excerpt(), 10, " " . $lien);
        echo '<p class="populaire__description">' . $excerpt . '</p>';
        ?>
        
        <?php afficher_temperatures(); ?>
        <?php afficher_appreciation_score(); ?>

    </div>
</article>
