<article class="populaire__article">
    <div class="populaire__thumbnail"><?php the_post_thumbnail('custom-large'); ?></div>
    <h2><?php the_title(); ?></h2>
    <div class="populaire__texte"><?php 
        echo wp_strip_all_tags(get_the_content());
    ?></div>
</article>