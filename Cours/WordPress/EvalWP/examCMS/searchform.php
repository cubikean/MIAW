<form action="<?php echo home_url( '/' ); ?>" method="get">
    <label for="search">Recherche : </label>

    <input type="hidden" value="slider" name="post_type">
    <input type="text" name="s" value="<?php the_search_query(); ?>">
    <button type="submit">Rechercher</button>
</form>