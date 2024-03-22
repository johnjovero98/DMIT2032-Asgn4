<p>this page uses front-page.php</p>


<?php get_header(); ?>

<div class="hero-banner">
    <div class="call-to-action container">
        <h2>Where Design Comes to Life</h2>
        <p>We are a dedicated St. Albert and Edmonton landscaping design and construction
            team who value the beauty that great design and workmanship can bring to a space.</p>

        <!-- wp:buttons -->
        <div class=" contact-us wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button" href="https://jjovero1.dmitstudent.ca/dmit2032/classic-site/contact-us/">Get Started</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>

    <div class="overlay"></div>
</div>



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