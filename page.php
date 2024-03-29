
<?php get_header(); ?>
<div class="post-banner">
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
    <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
    <img src="<?= $featured_image[0]; ?>" alt='' />
</div>

<?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <div class="post-content container">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>

<div class="call-to-action2 container" >
    <div>
        <h2>First Impressions Matter</h2>
        <p>Contact Us & Get a Free Consultation</p>
    </div>
</div>
<?php get_footer(); ?>