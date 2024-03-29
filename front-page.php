<?php get_header(); ?>

<div class="hero-banner">
    <div class="call-to-action container">
        <h2>Where Design Comes to Life</h2>
        <p>We are a dedicated St. Albert and Edmonton landscaping design and construction
            team who value the beauty that great design and workmanship can bring to a space.</p>
    </div>

    <div class="overlay"></div>
</div>

<!-- post grid -->
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

<!-- homepage widget -->
<div class="container">
    <?php dynamic_sidebar('home-page-widgets'); ?>
</div>

<div class="call-to-action2 container" >
    <div>
        <h2>First Impressions Matter</h2>
        <p>Contact Us & Get a Free Consultation</p>
    </div>
</div>

<?php get_footer(); ?>