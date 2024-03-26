<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class('no-js'); ?>>
    <header>
        <div class="container">
            <div class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php
                    // Get Custom Logo URL
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
                    $custom_logo_url = $custom_logo_data[0];
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
                        <img class=”img-fluid” src="<?php echo esc_url($custom_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
                    </a>
                <?php else : ?>
                    <div class="site-name">
                        <?php bloginfo('name'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <button class="menu-bttn">
                <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H20" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>
            </button>

            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'header',
                ));
                ?>

                <!-- wp:buttons -->
                <div class=" contact-us wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button" href="https://jjovero1.dmitstudent.ca/dmit2032/classic-site/contact-us/">Get In Touch</a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </nav>
        </div>
    </header>