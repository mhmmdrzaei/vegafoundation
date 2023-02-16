<?php get_header(); ?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>

    <?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>