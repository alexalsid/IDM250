<?php 

get_header();

?>


<main>
   
   <div class="img-cont"></div>

    <img src="<?php echo get_stylesheet_directory_uri();?>/dist/img/cover_mobile.jpg" alt="" class="mobile">

    </div>
    
    

   
    <div id="home-nav">

    
     <?php 
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
            ]);
        ?>


    </div>


    
    </main>


    <img src="<?php echo get_stylesheet_directory_uri();?>/dist/img/cover.png" alt="" class="desktop">


<?php get_footer()?>