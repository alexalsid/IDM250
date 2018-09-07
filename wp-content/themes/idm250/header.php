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
    
    <?php get_search_form(); ?>

    </div>

    <div class="start" id="search-screen">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/exit.svg" alt="exit" id="exit-search">

       <?php get_search_form(); ?>


    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/hamburger.svg" alt="open menu" id="hamburger">

        <nav id="nav-mobile">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/ img/exit.svg" alt="x" id="exit">
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