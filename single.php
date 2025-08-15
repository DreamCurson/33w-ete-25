<link rel="stylesheet" href="style.css" />
<?php get_header(); ?>
<section class="populaire">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('gabarit/populaire_seul'); ?>
  <?php endwhile; endif; ?>
</section>
<?php separation('100%', 5, '#d7efffff', 20); ?>

<?php get_template_part('gabarit/galerie'); ?>
<?php separation('100%', 5, '#ffffff', 20); ?>

<?php get_footer(); ?>
