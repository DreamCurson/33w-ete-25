<?php get_header(); ?>
<?php get_template_part('gabarit/hero'); ?>
<?php get_template_part('gabarit/formulaire'); ?>
<?php get_template_part('gabarit/galerie'); ?>
 
<section class="populaire">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('gabarit/populaire'); ?>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
</body>

<script src="wp-content\themes\33w-ete-25\script\animation-hero.js"></script>