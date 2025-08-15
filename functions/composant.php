<?php
function icone_sociaux($couleur)
{
    $couleur = substr($couleur, 1);
?>

    <a class="sociaux" href="https://github.com/DreamCurson/33w-ete-25/tree/TP2" target="_blank" rel="noopener noreferrer">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="#">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" width="32" height="32">
    </a>

<?php } ?>

<?php
function afficher_erreur_404() {
?>
    <section class="erreur404">
        <h2 class="erreur404__texte">Nous ne savons pas où vous êtes, mais vous êtes loin de la destination attendue...</h2>
        <img class="erreur404__gif" src="<?php echo get_template_directory_uri(); ?>/images/404_island.gif" alt="" class="ile perdu" />
    </section>
<?php
}
?>

<?php
function afficher_carrousel($background_images) {
    if (!empty($background_images)) {
        echo '<div class="hero__carrousel-container">';
        
        foreach ($background_images as $index => $image) {
            echo '<div class="hero__carrousel carrousel" style="background-image: url(' . esc_url($image) . ');"></div>';
        }

        echo '<div class="carrousel__form">';
        foreach ($background_images as $index => $image) {
            echo '<input type="radio" id="carrousel-radio-' . $index . '" name="carrousel-radio" class="carrousel__radio" ' . ($index === 0 ? 'checked' : '') . '>';
        }
        echo '</div>';
        echo '</div>';
    }
}
?>

<?php
function afficher_temperatures() {
?>
    <p class="populaire__temp">Temperature minimum : <?php the_field('temperature_minimum'); ?></p>
    <p class="populaire__temp">Temperature maximum : <?php the_field('temperature_maximum'); ?></p>
    <p class="populaire__temp">Temperature moyenne : <?php the_field('temperature_moyenne'); ?></p>
<?php
}
?>

<?php
function afficher_appreciation_score() {
    $appreciation_score = get_field('appreciation_score');

    if ($appreciation_score) :
        ?>
        <div class="populaire__stars">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $appreciation_score) {
                    echo '<span class="populaire__star populaire__filled">★</span>';
                } else {
                    echo '<span class="populaire__star populaire__empty">★</span>';
                }
            }
            ?>
        </div>
        <?php
    endif;
}

function extraire_list_categories($nom_categorie)
{
    $parent_category = get_category_by_slug($nom_categorie);
    if (!$parent_category) {
        return;
    }

    $tableau = array(
        'parent' => $parent_category->term_id,
        'hide_empty' => true
    );

    $list_categories = get_categories($tableau);

    if (!empty($list_categories)) {
        echo "<ul class='list_categories'>";
        foreach ($list_categories as $categorie) {
            echo "<li class='list__categorie' data-id='" . esc_attr($categorie->term_id) . "'>" . esc_html($categorie->name) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No categories found.</p>";
    }
}

function afficher_section_categorie($categorie) {
    ?>
    <section class="<?php echo esc_attr($categorie); ?>">
        <?php extraire_list_categories($categorie); ?>
        <div class="<?php echo esc_attr($categorie); ?>__list"></div>
    </section>
    <?php
}

function separation($width = '100%', $strokeWidth = 5, $color = 'blue', $bottomPadding = 5) {
    $bottomPadding = (int)$bottomPadding;
    $strokeWidth = (int)$strokeWidth;

    $svgHeight = $strokeWidth + $bottomPadding;

    echo '
    <svg width="' . htmlspecialchars($width) . '" height="' . htmlspecialchars($svgHeight) . '" xmlns="http://www.w3.org/2000/svg">
        <line x1="0" y1="' . htmlspecialchars($strokeWidth / 2) . '" x2="' . htmlspecialchars($width) . '" y2="' . htmlspecialchars($strokeWidth / 2) . '" style="stroke:' . htmlspecialchars($color) . ';stroke-width:' . htmlspecialchars($strokeWidth) . '" />
    </svg>';
}








?>
