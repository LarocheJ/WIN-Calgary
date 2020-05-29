<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <title><?php bloginfo('name'); wp_title("|"); ?></title>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="wptime-plugin-preloader"></div>

    <header>

        <div class="top-fixed">

            <nav class="main-nav">

                <div id="logo">
                    <?php 
                        if ( function_exists('custom_logo')) {
                            the_custom_logo();
                        }
                    ?>
                </div>

                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_id' => 'main-menu'
                )); ?>

            </nav>

        </div>

    </header>