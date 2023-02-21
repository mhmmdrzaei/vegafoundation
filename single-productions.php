<?php get_header(); ?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_posts())
        while (have_posts()):
            the_post(); ?>
    <section class="postInformation">
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
        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2>

    </section>

    <section class="postContainer">

        <section class="openingImages">
            <?php $images = get_field('opening_image_carousel'); ?>
            <?php if ($images): ?>
            <?php if (count($images) == 1): ?>
            <img src="<?php echo esc_url($images[0]['sizes']['large']); ?>"
                alt="<?php echo esc_attr($images[0]['alt']); ?>" />
            <p>
                <?php echo esc_html($images[0]['caption']); ?>
            </p>
            <?php else: ?>
            <div class="slick-carousel">
                <?php foreach ($images as $image): ?>
                <div>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <p>
                        <?php echo esc_html($image['caption']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </section>
        <section class="hostingVenueDetails">
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
            <?php $openingDate = get_field('opening_date');
                    // if(!empty($row['oc_retailer']))
                    if (!empty($openingDate)) {
                        ?>
            <p>Opening:
                <?php the_field('opening_date') ?>
            </p>
            <?php } ?>
            <?php $link = get_field('additional_information_link');
                    // if(!empty($row['oc_retailer']))
                    if (!empty($link)) {
                        ?>
            <?php
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
            <a class="button" href="<?php echo esc_url($link_url); ?>"
                target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php } ?>



        </section>
        <section class="projectBody">
            <?php if (have_rows('project_page_content')): ?>
            <?php while (have_rows('project_page_content')):
                            the_row(); ?>
            <?php if (get_row_layout() == 'text'): ?>
            <section class="projectText" aria-label="Project Text information">
                <?php the_sub_field('project_text_box'); ?>
            </section>

            <?php elseif (get_row_layout() == 'embedded_content'): ?>
            <div class="videoOuter">
                <section class="videoContainer" aria-label="Embedded content container">
                    <?php the_sub_field('embedded_content_link') ?>
                </section>

            </div>


            <?php elseif (get_row_layout() == 'heading_seperator'): ?>
            <h2 class="headingSeperator">
                <?php the_sub_field('heading_text') ?>
            </h2>

            <?php elseif (get_row_layout() == 'uploaded_videos'): ?>

            <section class="htmlvideoContainer" aria-label="video with play button, with no other controls">
                <?php $videoFile = get_sub_field('upload_video_file') ?>
                <video id="my-video" class="video-js medium  vjs-layout-medium vjs-16-9" preload="auto" controls="play"
                    width="750" height="422" poster="<?php the_sub_field('placeholder_image') ?>"
                    data-setup="{'fluid': true}">
                    <source src="<?php echo esc_html($videoFile['url']) ?>" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
                <p>
                    <?php echo esc_html($videoFile['caption']); ?>
                </p>
            </section>





            <?php elseif (get_row_layout() == 'image_carousel'): ?>
            <?php $images = get_sub_field('image_carousel_'); ?>
            <?php if ($images): ?>
            <?php if (count($images) == 1): ?>
            <img src="<?php echo esc_url($images[0]['sizes']['large']); ?>"
                alt="<?php echo esc_attr($images[0]['alt']); ?>" />
            <p>
                <?php echo esc_html($images[0]['caption']); ?>
            </p>
            <?php else: ?>
            <div class="slick-carousel">
                <?php foreach ($images as $image): ?>
                <div>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <p>
                        <?php echo esc_html($image['caption']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>


            <?php endif ?>
            <?php endwhile ?>
            <?php endif ?>
        </section>



    </section>

    <?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>