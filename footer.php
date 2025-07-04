<?php 
$piedpage_auteur = get_theme_mod('piedpage_auteur', 'Default Title');
$piedpage_email = get_theme_mod('piedpage_email', 'Default Title');
$piedpage_phone = get_theme_mod('piedpage_phone', 'Default Title');

?>

<footer class="piedpage">
    <div>
        <div class="piedpage__textes">
            <p class="piedpage__texte"><?= $piedpage_auteur ?></p>
            <p class="piedpage__texte"><?= $piedpage_email ?></p>
            <p class="piedpage__texte"><?= $piedpage_phone ?></p>
        </div>
        <div class="piedpage__reseau">
            <?php get_template_part('gabarit/icone'); ?>
        </div>
    </div>
    <?php get_template_part('partials/footer-header'); ?>
    
</footer>