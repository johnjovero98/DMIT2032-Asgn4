<?php get_header(); ?>

<p>this web page is using single.php</p>

<div class="post-banner">
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
    <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
    <img src="<?= $featured_image[0]; ?>" alt='' />
</div>

<?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <div class="container">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>