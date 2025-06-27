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
        
        <p class="populaire__temp">Temperature minimum : <?php the_field('temperature_minimum'); ?></p>
        <p class="populaire__temp">Temperature maximum : <?php the_field('temperature_maximum'); ?></p>
        <p class="populaire__temp">Temperature moyenne : <?php the_field('temperature_moyenne'); ?></p>

        <?php
        $appreciation_score = get_field('appreciation_score'); 

        if ($appreciation_score) :
        ?>
            <div class="populaire__stars">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $appreciation_score) {
                        echo '<span class="populaire__star populaire__filled">★</span>';
                    } else {
                        echo '<span class="populaire__star populaire__empty">★</span>';
                    }
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</article>
