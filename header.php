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
        <!-- <?php  require 'svg/menu.svg';?> -->
        <img class="menuOpenButton openNow" src="<?php bloginfo('template_directory'); ?>/images/menu.svg" alt="Menu Nav">
        <img class="menuCloseButton" src="<?php bloginfo('template_directory'); ?>/images/close.svg" alt="Close Nav">

        </section>
        <nav>
            <ul>
                <li> <a href="/#About"><img src="<?php bloginfo('template_directory'); ?>/images/about.svg" alt="About Menu item" style="height:24px;"></a></li>
                <li>
                <a href="/#productions"><img src="<?php bloginfo('template_directory'); ?>/images/productions.svg" alt="Productions Menu item" style="height:24px;"></a>
                </li>
                <li>
                <a href="#contact"><img src="<?php bloginfo('template_directory'); ?>/images/contact.svg" alt="Contact Menu item" style="height:22px;"></a>

                </li>
            </ul>
        </nav>
        <section class="menu">
        </section>
        
    
        <!-- <button class="mobileMenu">Menu</button> -->
    </header>
    <!--/.header-->