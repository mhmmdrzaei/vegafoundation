<?php get_header(); ?>
<main class="fourOhfour">
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

        <h1>Not Found</h1>
        <p>Apologies, but the page you requested could not be found.</p>

    </div> <!-- /.container -->

</main>


<?php get_footer(); ?>