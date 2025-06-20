<article class="populaire__article">
    <div class="populaire__thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
    <h2><?php the_title(); ?></h2>
    <div class="populaire__texte"><?php 
        $lien ="<a href=" . get_permalink() . ">Suite...</a>";
        echo wp_trim_words(get_the_excerpt(), 10, " " . $lien);
    ?></div>
</article>