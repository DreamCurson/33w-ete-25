<section class="galerie">
  <h2>Nos destinations favorites</h2>
  <div class="galerie__images">
    <?php
    $default_images = [
        'beach-418742_640.jpg',
        'desert-4428269_640.jpg',
        'lighthouse-7250229_640.jpg',
        'mountainous-5942962_640.jpg',
        'mountains-6865752_640.jpg',
        'mountains-736886_640.jpg',
        'ocean-4270249_640.jpg',
        'riverbank-7885727_640.jpg',
        'snow-7646952_640.jpg',
        'trees-4896953_640.jpg',
    ];

    for ($i = 1; $i <= 10; $i++) {
        $image = get_theme_mod('gallerie_image_' . $i);
        if (!$image) {
            $image = get_template_directory_uri() . '/images/grid/' . $default_images[$i - 1];
        }
        echo '<img src="' . esc_url($image) . '" alt="" class="galerie__image" />';
    }
    ?>
  </div>
</section>
