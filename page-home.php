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
                <?php $images = get_field('opening_image_carousel'); ?>
                <?php if ($images): ?>
                <img src="<?php echo esc_url($images[0]['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($images[0]['alt']); ?>" />
                <?php endif; ?>
                <section class="projectInformation">

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
                    <h3>
                        <?php the_title(); ?>
                    </h3>

                </section>


            </a>

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
                <?php $images = get_field('opening_image_carousel'); ?>
                <?php if ($images): ?>
                <img src="<?php echo esc_url($images[0]['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($images[0]['alt']); ?>" />
                <?php endif; ?>
                <section class="projectInformation">

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
                    <h3>
                        <?php the_title(); ?>
                    </h3>

                </section>


            </a>
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