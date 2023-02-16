<?php get_header(); ?>
<main class="homeContainer">
    <?php if (have_posts())
    while (have_posts()):
      the_post(); ?>
    <?php the_content(); ?>

    <?php endwhile; // end the loop?>

    <section class="productionPosts">
        <?php
    $args = array(
      'post_type' => 'productions',
      'posts_per_page' => -1,
      'meta_key' => 'is_a_current_project_',
      'meta_value' => 'Current',
      'orderby' => array(
        'meta_value' => 'DESC',
        'post_date' => 'DESC',
      ),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()):
      echo '<h2>Current Productions</h2>';
      while ($query->have_posts()):
        $query->the_post();
        if (get_field('is_a_current_project_') == 'Current'): ?>
        <article id="post-<?php the_ID(); ?>" class="currentPost" aria-label="CurrentPost item container">
            <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>"
                rel="bookmark">
                <?php the_title(); ?>
            </a>
            <?php the_post_thumbnail('large'); ?>
            <section class="artistNames">
                <?php if (have_rows('additional_artist_names')): ?>
                <?php while (have_rows('additional_artist_names')):
                  the_row();
                  $artistName = get_sub_field('additional_artist_namess');
                  if (!empty($artistName)):
                    ; ?>
                <h2>
                    <?php the_sub_field('additional_artist_namess'); ?>
                </h2>
                <?php endif; ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </section>
            <?php $hosting = get_field('hosting_venue');
            // if(!empty($row['oc_retailer']))
            if (!empty($hosting)) {
              ?>
            <?php the_field('hosting_venue') ?>
            <?php } ?>
            <?php $yearProject = get_field('project_dates');
            // if(!empty($row['oc_retailer']))
            if (!empty($yearProject)) {
              ?>
            <?php the_field('project_dates') ?>
            <?php } ?>

        </article>
        <?php endif;
      endwhile;
      wp_reset_postdata();
    endif;

    $args = array(
      'post_type' => 'productions',
      'posts_per_page' => -1,
      'meta_key' => 'is_a_current_project_',
      'meta_value' => 'Archive',
      'orderby' => array(
        'meta_value' => 'DESC',
        'post_date' => 'DESC',
      ),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()):
      echo '<h2>Archive Productions</h2>';
      while ($query->have_posts()):
        $query->the_post();
        if (get_field('is_a_current_project_') == 'Archive'): ?>
        <article id="post-<?php the_ID(); ?>" class="archivePost" aria-label="archive post item container">
            <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>"
                rel="bookmark">
                <?php the_title(); ?>
            </a>
            <?php the_post_thumbnail('large'); ?>
            <section class="artistNames">
                <?php if (have_rows('additional_artist_names')): ?>
                <?php while (have_rows('additional_artist_names')):
                  the_row();
                  $artistName = get_sub_field('additional_artist_namess');
                  if (!empty($artistName)):
                    ; ?>
                <h2>
                    <?php the_sub_field('additional_artist_namess'); ?>
                </h2>
                <?php endif; ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </section>
            <?php $hosting = get_field('hosting_venue');
            // if(!empty($row['oc_retailer']))
            if (!empty($hosting)) {
              ?>
            <?php the_field('hosting_venue') ?>
            <?php } ?>
            <?php $yearProject = get_field('project_dates');
            // if(!empty($row['oc_retailer']))
            if (!empty($yearProject)) {
              ?>
            <?php the_field('project_dates') ?>
            <?php } ?>

        </article>
        <?php endif;
      endwhile;
      wp_reset_postdata();
    endif;

    if (!$query->have_posts()): ?>
        <article id="post-0" class="fullwidthpost" aria-label="no citations listed">
            <h2 class="entry-title">Not Found</h2>
            <section class="excerptPosts fullwidthexcerpts">
                <p>Apologies, but no results were found!</p>
            </section>
        </article>
        <?php endif; ?>
    </section>

</main>



<?php get_footer(); ?>