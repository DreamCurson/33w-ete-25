  <div class="piedpage__contenu">
    <!-- Optional logo -->
    <!-- <img src="images/logo.png" alt="" class="piedpage__logo" /> -->

    <nav class="piedpage__nav">
      <?php wp_nav_menu(array(
        'menu'         => 'footer',
        'menu_class'   => 'piedpage__menu',
        'container'    => false,
        'depth'        => 1,
        'fallback_cb'  => false,
        'add_li_class' => 'piedpage__menu-item'
      )); ?>

      <?php get_search_form(); ?>
    </nav>
  </div>
