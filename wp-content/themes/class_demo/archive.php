<?php get_header(); ?>

<h1> <?php echo get_the_archive_title(); ?>

<ul>

<?php 


$arg = [

    'type' => 'monthly'
];

wp_get_archives($arg);

?>

</ul>


<?php 


$arg = [

    'type' => 'yearly'
];

wp_get_archives($arg);

?>

</ul>





<?php get_footer(); ?>