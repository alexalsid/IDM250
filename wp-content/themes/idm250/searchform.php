
        <form method="GET" action="<?php echo home_url()?>">
            <input type="text" name="s" placeholder="search..." value="<?php the_search_query();?>">
            <button id="search-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/arrow-right.svg"></button>
        </form>