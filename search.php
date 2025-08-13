<link rel="stylesheet" href="style.css" />
<?php get_header(); ?>
<h2>Résultat de la recherche</h2>

<section class="populaire">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('gabarit/populaire'); ?>
    <?php endwhile; endif; ?>
</section>
 
<?php get_footer(); ?>