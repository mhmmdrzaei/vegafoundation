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
        <section class="mobileMenu">
        <?php  require 'svg/menu.svg';?>
        </section>
        <nav>
            <ul>
                <li> <a href="/#About"><img src="<?php bloginfo('template_directory'); ?>/images/about.png" alt="About Menu item"></a></li>
                <li>
                <a href="/#productions"><img src="<?php bloginfo('template_directory'); ?>/images/productions.png" alt="Productions Menu item"></a>
                </li>
                <li>
                <a href="#contact"><img src="<?php bloginfo('template_directory'); ?>/images/contact.png" alt="Contact Menu item"></a>

                </li>
            </ul>
        </nav>
        <section class="menu">
        </section>
        
    
        <!-- <button class="mobileMenu">Menu</button> -->
    </header>
    <!--/.header-->