<?php get_header(); ?>
<?php get_template_part('gabarit/hero'); ?>
<?php get_template_part('gabarit/formulaire'); ?>
<?php get_template_part('gabarit/galerie'); ?>

<?php separation('100%', 5, '#ffffff', 20); ?>

<section class="populaire">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('gabarit/populaire'); ?>
    <?php endwhile; endif; ?>
</section>

<?php separation('100%', 5, '#d7efffff', 20); ?>

<?php afficher_section_categorie("destination"); ?>

<?php separation('100%', 5, '#ffffff', 20); ?>

<?php get_footer(); ?>
</body>