<div class="erreur404">
    <div class="erreur404__textes">
        <h1 class="erreur404__titre">Oops, vous avez échoué sur l'île 404 !</h1>

        <p class="erreur404__description">
            Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin
            des destinations de rêve que notre club a soigneusement sélectionnées pour vous.
            Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau 
            nos voyages d’exception !
        </p>
    </div>

    <a href="<?php echo home_url(); ?>" class="erreur404__accueil">Retour à l'accueil</a>

    <div class="erreur404__destinations">
        <a href="<?php echo esc_url(home_url('/destination/costa-rica')); ?>" class="erreur404__button">Costa Rica</a>
        <a href="<?php echo esc_url(home_url('/destination/alaska')); ?>" class="erreur404__button">Alaska</a>
        <a href="<?php echo esc_url(home_url('/destination/iles-feroe')); ?>" class="erreur404__button">Îles Féroé</a>
        <a href="<?php echo esc_url(home_url('/destination/paris')); ?>" class="erreur404__button">Paris, France</a>
    </div>

    <form class="erreur404__recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <label>
            <input class="erreur404__recherche_input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
        </label>
    </form>
</div>
