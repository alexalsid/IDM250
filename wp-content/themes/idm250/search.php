<?php 
$searched_string = $_GET['s'];
get_header();
global $wp_query;
?>


<div class="search-stuff">

<div><h2>Showing results for</h2> <h3><?php echo $searched_string ?></h3></div>



    <div class="search">

       <?php  get_search_form(); ?>


    </div>

    </div>


<main>

<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

<div class="project">
   <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                  <?php else: ?>
                    <img src="https://placehold.it/1280x720" alt="">
                  <?php endif; ?>
    <div class="project-info">
    <h1><?php the_title()?></h1>

    <a href="<?php the_permalink(); ?>"><button>VIEW</button></a>
</div>
</div>

<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>
        <?php echo 'Sorry, no posts matched your criteria.'; ?>
    </p>
    <?php endif; ?>


</main>



<?php get_footer(); ?>




