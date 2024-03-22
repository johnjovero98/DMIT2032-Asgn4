<p>this page uses front-page.php</p>


<?php get_header(); ?>



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

