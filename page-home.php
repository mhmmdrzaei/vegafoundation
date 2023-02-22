<?php get_header(); ?>
<section class="intro">
  <?php if (have_posts())
    while (have_posts()):
      the_post(); ?>
      <div class="ParallaxVideo" id="ParallaxVideo">
        <video autoplay muted loop playsinline>
          <source src="https://thevegafoundation.com/wp-content/uploads/2022/04/vega-lamps-on-v1_website_compress.mp4"
            type="video/mp4">
          <source src="https://thevegafoundation.com/wp-content/uploads/2023/02/vegalamps.ogg" type="video/ogg">
        </video>
      </div>
      <section class="siteMission">
        <div class="container">
          <?php the_content(); ?>
        </div>


      </section>


    <?php endwhile; // end the loop?>
</section>
<main class="homeContainer ">
  <div class="container">
    <section class="productionPosts" id="productions">
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
        echo '</div><h2 class="currProdHead">Current Productions</h2><div class="container">';
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
                <h2>
                  <?php the_title(); ?>
                </h2>



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
        echo '</div><h2 class="archHeading">Archive Productions</h2><div class="archivePosts"><div class="container">';
        while ($query->have_posts()):
          $query->the_post();
          if (get_field('is_a_current_project_') == 'Archive'): ?>
            <article id="post-<?php the_ID(); ?>" class="archivePost" aria-label="archive post item container">
              <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>"
                rel="bookmark">
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
                <?php $images = get_field('opening_image_carousel'); ?>
                <?php if ($images): ?>
                  <img src="<?php echo esc_url($images[0]['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($images[0]['alt']); ?>" />
                <?php endif; ?>

                <h2>
                  <?php the_title(); ?>
                </h2>



              </a>
            </article>
          <?php endif;
          echo '</div>';
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

  </div>





</main>



<?php get_footer(); ?>