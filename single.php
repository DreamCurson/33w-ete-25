<link rel="stylesheet" href="style.css" />
<?php get_header(); ?>
<section class="populaire">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('gabarit/populaire_seul'); ?>
  <?php endwhile; endif; ?>
</section>

<?php get_template_part('gabarit/galerie'); ?>

<?php get_footer(); ?>
<script src="script/checkbox.js"></script>