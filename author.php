<?php get_header(); ?>
<main class="author">
    <?php
  /* Queue the first post, that way we know who
   * the author is when we try to get their name,
   * URL, description, avatar, etc.
   */
  if (have_posts())
    the_post();
  ?>
    <h1>Author Archives:
        <a class="name" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
        </a>
    </h1>
    <?php
  rewind_posts();
  get_template_part('loop', 'author');
  ?>

</main>

<?php get_footer(); ?>