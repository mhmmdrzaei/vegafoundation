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
    
        <!-- <button class="mobileMenu">Menu</button> -->\
        <nav>
            <ul id="menu-header-menu" class="menu">
                <li id="menu-item-45" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45"><a href="/#About"><?php  require 'svg/about.svg';?></a></li>
                <li id="menu-item-46" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-46"><a href="/#productions"><?php  require 'svg/productions.svg';?></a></li>
                <li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47"><a href="#contact"><?php  require 'svg/contact.svg';?></a></li>
            </ul>
        </nav>
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