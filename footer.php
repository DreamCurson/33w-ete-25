<?php 
$piedpage_auteur = get_theme_mod('piedpage_auteur', 'Default Title');
$piedpage_email = get_theme_mod('piedpage_email', 'Default Title');
$piedpage_phone = get_theme_mod('piedpage_phone', 'Default Title');
$piedpage_couleur_fond = get_theme_mod('piedpage_couleur_fond');
$piedpage_couleur_icone = get_theme_mod('piedpage_couleur_icone');
?>
<style>
    .piedpage{
        background-color: <?= $piedpage_couleur_fond ?>;
    }
</style>
<footer class="piedpage">
    <div>
        <div class="piedpage__textes">
            <p class="piedpage__texte"><?= $piedpage_auteur ?></p>
            <p class="piedpage__texte"><?= $piedpage_email ?></p>
            <p class="piedpage__texte"><?= $piedpage_phone ?></p>
        </div>
        <div class="piedpage__reseau">
            <?php icone_sociaux($piedpage_couleur_icone) ?>
        </div>
    </div>
    <?php get_template_part('partials/footer-header'); ?>
<?php wp_footer(); ?>    
</footer>