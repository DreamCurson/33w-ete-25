<?php
function icone_sociaux($couleur)
{
    // pour enle ver le # de la position 0 on extrait à partir de la position 1   
    $couleur = substr($couleur, 1);
?>

    <a class="sociaux" href="https://github.com/DreamCurson/33w-ete-25/tree/TP1_3" target="_blank" rel="noopener noreferrer">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="#">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" width="32" height="32">
    </a>

<?php } ?>