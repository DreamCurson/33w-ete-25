<?php
function icone_sociaux($couleur)
{
    $couleur = substr($couleur, 1);
?>

    <a class="sociaux" href="https://github.com/DreamCurson/33w-ete-25/tree/TP1_3" target="_blank" rel="noopener noreferrer">
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
function afficher_carrousel($hero_background) {
?>
  <form class="carrousel__form">
    <input type="radio" name="carrousel__radio" class="carrousel__radio" checked>
    <input type="radio" name="carrousel__radio" class="carrousel__radio">
    <input type="radio" name="carrousel__radio" class="carrousel__radio">
  </form>

  <div class="carrousel" style="background-image: url('<?php echo esc_url($hero_background[0]); ?>');"></div>
  <div class="carrousel" style="background-image: url('<?php echo esc_url($hero_background[1]); ?>');"></div>
  <div class="carrousel" style="background-image: url('<?php echo esc_url($hero_background[2]); ?>');"></div>
<?php
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
    $tableau = array(
        'parent' => $parent_category->term_id,
        'hide_empty' => true
    );
    $list_categories = get_categories($tableau);
    echo "<ul class='list_categories'>";
    foreach ($list_categories as $categorie) {
        echo "<li data-id='" . $categorie->term_id . "'>" . $categorie->name . "</li>";
    }
    echo "</ul>";
}

?>
