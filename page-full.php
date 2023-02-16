<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<main>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

</main>

<?php get_footer(); ?>