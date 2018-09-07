<?php 

get_header();


?>

<?php if (have_posts()): ?>
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?>


<main>

    <div class="desk-title">

        
<div>
    <h2>
    
       <?php the_field('roll') ?>
    
    </h2>

    <h1>
        <?php the_field('title') ?>
        
    </h1>

    </div>

    <button class="launch-desk">Lauch Demo</button>

    </div>

   

    <!-- might need function to change this nav content-->
    

    <div class="top-feat">
<?php if( have_rows('jump_to') ): ?>
        <div class="drop-cont">
        <div id="drop-box">
            <h3>Jump To</h3>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/down-arrow.svg" alt="expand" id="down-arrow">
        </div>
        <div id="drop-down" class="no-display">

                <?php while( have_rows('jump_to') ): the_row(); 

         $linkName = get_sub_field('link_name');
         $linkHref = get_sub_field('link_href');
        
        ?>
       
        <a href="<?php echo $linkHref ?>"><?php echo $linkName ?></a>
        <div class="seperator"></div>
      
<?php endwhile; ?>
        </div>
<?php endif; ?>
        </div>

        <button class="launch">Launch Demo</button>

        </div>


    


        <div class="desk-display">

    
    <div class="cover">

        <img src="<?php the_field('cover') ?>">
   
    </div>

    
    <p>
    <?php 
    the_field('description');
    ?>
    </p>


    <div class="lines"> 
        
       <?php if( have_rows('jump_to') ): ?>
        <h4>Jump To</h4>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/dash_line.svg">

        <?php while( have_rows('jump_to') ): the_row(); 

         $linkName = get_sub_field('link_name');
         $linkHref = get_sub_field('link_href');
        
        ?>
    
        
        <a href="<?php echo $linkHref ?>"> <?php echo $linkName ?></a>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/dash_line.svg">

<?php endwhile; ?>
<?php endif; ?>

</div>
</div>


<?php if( have_rows('row') ): ?>
<div class="project-steps">

<?php while( have_rows('row') ): the_row(); 
        $rowDescription = get_sub_field('row_description');
        $rowImage = get_sub_field('row_image');
        $rowHref = get_sub_field('row-href');

?>

    <div class="placeholder" id="<?php echo $rowHref ;?>">
        <img src="<?php echo $rowImage ; ?>" alt="">
    </div>

    <p>
        <?php echo $rowDescription ; ?>
    </p>

<?php endwhile; ?>
</div>
<?php endif; ?>


    <!-- Will differ project to project -->
    <!-- get assets for all these things -->
    


    </main>


    <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
            <?php else: ?>
            <h2>Sorry, No Post Found</h2>
            <?php endif; ?>


<?php 

get_footer();

?>