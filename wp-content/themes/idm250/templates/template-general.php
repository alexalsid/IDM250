


<?php


/*
Template Name: General Styles
*/

get_header(); ?>
<!--blog body-->
<div id="Blog-post"> 

<div class="entry-header" style="background-image: url(<?php echo get_template_directory_uri();?>/dist/img/single_cover.png);">

</div>

    

  <main>
    <div class="row wow fadeInUp"> 
      <?php if (have_posts()): ?>
          <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          </article>
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
  </div>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/main.js"> </script>

<?php get_footer(); ?>