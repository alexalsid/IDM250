<?php
/*
Template Name: Post Listing
*/

get_header();

?>


<?php if ($posts->have_posts()) : ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

<div class="project">
   <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                  <?php else: ?>
                    <img src="https://placehold.it/1280x720" alt="">
                  <?php endif; ?>
    
    <h1><?php the_title()?></h1>

    <a href="<?php the_permalink(); ?>"><button>VIEW</button></a>
</div>

<?php endwhile; ?>

<?php else : ?>
            <p>
              <?php echo 'Sorry, no posts matched your criteria.'; ?>
            </p>
            
<?php endif; ?>


<?php get_footer() ?>