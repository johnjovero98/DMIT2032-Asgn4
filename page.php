<p>this web page is using page.php</p>

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
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>