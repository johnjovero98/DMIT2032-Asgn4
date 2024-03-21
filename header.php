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
            
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'header',
                ));
                ?>
                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://jjovero1.dmitstudent.ca/dmit2032/classic-site/contact-us/">Get In Touch</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons --></div>
            </nav>
        </div>
    </header>