<?php get_header(); ?>
<?php get_template_part('gabarit/hero'); ?>
<?php get_template_part('gabarit/formulaire'); ?>
<?php get_template_part('gabarit/galerie'); ?>
 
<section class="populaire">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('gabarit/populaire'); ?>
    <?php endwhile; endif; ?>
</section>

<?php afficher_section_categorie("destination"); ?>

<?php get_footer(); ?>
</body>