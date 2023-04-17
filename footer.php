<footer id="contact">
    <div class="container">
        <section class="logo">
            <?php
                $image = get_field('footer_logo', 'options');
                if (!empty($image)): ?>
            <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name', 'display'); ?>" rel="home">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
            <?php endif; ?>

        </section>
        <section class="foundationDetails">
            <section class="vegaDetails">
                <?php the_field('foundation_administrative_information', 'options') ?>
            </section>
            <p>&copy;
                <?php bloginfo('name'); ?>
                <?php echo date('Y'); ?>
            </p>
        </section>

        <section class="vegaInfo">
            <img src="<?php bloginfo('template_directory'); ?>/images/contact us.svg" style="width:230px;" alt="contact us">
            <section class="social_links" aria-label="Social Medial Links">
                <?php if (have_rows('social_links', 'options')): ?>
                <ul class="linksEach">
                    <?php while (have_rows('social_links', 'options')):
                            the_row();
                            ?>
                    <?php
                            $link = get_sub_field('social_link_');
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                    <li><a class="button" href="<?php echo esc_url($link_url); ?>"
                            target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></li>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </section>
            <section class="email">
                <a href="mailto:<?php the_field('foundation_email_address', 'options') ?>"><?php
                   the_field('foundation_email_address', 'options') ?></a>

            </section>




        </section>

    </div>


</footer>


<?php wp_footer(); ?>
</body>

</html>