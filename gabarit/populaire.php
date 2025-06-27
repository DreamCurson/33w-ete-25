<article class="populaire__article">
    <div class="populaire__thumbnail">
        <?php the_post_thumbnail('custom-flex'); ?>
    </div>
    <h2><?php the_title(); ?></h2>
    <div class="populaire__texte">
        <?php 
        $lien = "<a href=" . get_permalink() . ">Suite...</a>";
        echo wp_trim_words(get_the_excerpt(), 10, " " . $lien);
        ?>
        <p class="populaire__temp">Temperature minimum : <?php the_field('temperature_minimum'); ?></p>
        <p class="populaire__temp">Temperature maximum : <?php the_field('temperature_maximum'); ?></p>
        <p class="populaire__temp">Temperature moyenne : <?php the_field('temperature_moyenne'); ?></p>
    </div>
</article>
