<?php

/**
 * The front-page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 *
 * @package HML Classic
 */
get_header();
?>


<div>
    <?php while (have_posts()) : ?>
        <div class="container">
            <?php the_post();
            ?>

            <div class="actual-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>

