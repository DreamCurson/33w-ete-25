<article class="populaire__article">
    <div class="populaire__thumbnail"><?php the_post_thumbnail('custom-large'); ?></div>
    <h2><?php the_title(); ?></h2>
    <div class="populaire__texte"><?php 
        echo wp_strip_all_tags(get_the_content());
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