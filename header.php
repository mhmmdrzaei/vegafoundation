<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php // Load Meta ?>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- stylesheets should be enqueued in functions.php -->
    <!-- <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/VegaABC.otf" as="font" type="font/woff2"
        crossorigin="anonymous"> -->
    <!-- <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/HYBRID_SANS.otf" as="font" type="font/otf"
        crossorigin="anonymous">
    <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/VEGAB-Regular.otf" as="font"
        type="font/otf" crossorigin="anonymous"> -->
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <header>
        <button class="mobileMenu">Menu</button>
        <nav>
            <?php wp_nav_menu(
                array(
                    'container' => false,
                    'theme_location' => 'primary'
                )
            ); ?>

        </nav>
    </header>
    <!--/.header-->