<?php get_header(); ?>

<section class="categorie__description">
    <h1 class="categorie__titre"><?php single_cat_title(); ?></h1>
    <p class="categorie__texte"><?php echo category_description(); ?></p>
</section>

<section class="populaire">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('gabarit/populaire'); ?>
    <?php endwhile; endif; ?>
</section>

<?php get_template_part('gabarit/galerie'); ?>
<?php get_footer(); ?>
