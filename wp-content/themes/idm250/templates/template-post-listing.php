<?php
/*
Template Name: Post Listing
*/


$arg = [
  'post_type'     => 'post',
  'post_status'   => 'publish',
  'posts_per_page'=> 3
];
$posts = new WP_Query($arg);

get_header();

?>

<img src="<?php echo get_stylesheet_directory_uri();?>/dist/img/projects.svg" alt="" id="projects">

<main>

<?php if ($posts->have_posts()) : ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

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

<?php else : ?>
            <p>
              <?php echo 'Sorry, no posts matched your criteria.'; ?>
            </p>
            
<?php endif; ?>

</main>




<?php get_footer(); ?>