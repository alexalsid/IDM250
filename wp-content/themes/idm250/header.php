<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php the_title();?> | IDM250</title>
    <?php wp_head(); ?>
    
</head>
<body>


    <header>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/search.svg" alt="search" id="search">
    <div id="search-desk">
    <form  action="search_results.html" method="POST" >
     <input type="text" name="search">
     <input type="image" name="submit" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/down-arrow.svg">

    </form>

    </div>

    <div class="start" id="search-screen">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/exit.svg" alt="exit" id="exit-search">

        <form action="search_results.html" method="POST">
            <input type="text" name="search" id="search" placeholder="Search">
            <input type="submit" name="submit" id="submit" value="GO">
        </form>


    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/hamburger.svg" alt="open menu" id="hamburger">

        <nav id="nav-mobile">
          <?php 
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
            ]);
        ?>
        </nav>


        <nav id="nav-desktop">
  <?php 
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
            ]);
        ?>
            </ul>



        </nav>

    </header>