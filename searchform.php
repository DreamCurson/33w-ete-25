<?php 


?>

<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="recherche__bouton" type="submit">
    <span class="recherche__icone"><img
        src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000"
        width="20"
        height="20"
        alt="Rechercher"
        />
    </span>
    </button>
</form>