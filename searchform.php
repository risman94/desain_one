<form action="<?php echo home_url('/') ?>" method="get">
    <label for="search">Search </label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="submit" name="submit" id="search_submit" value="Cari">
</form>