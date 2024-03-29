<?php get_header(); ?>
<div class="container">
    <h2 class="archive-title">Posts about Construction</h2>
    <?php if (have_posts()) : ?>
        <div class="archive-posts">
            <?php while (have_posts()) : ?>
                <div>
                    <?php the_post(); ?>
                    <?php if (has_post_thumbnail()) :
                        $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium'); ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image[0]; ?>" alt='' class="img-fluid" /></a>
                    <?php endif; ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                </div>
            <?php endwhile; ?>
        </div>
        <?php the_posts_pagination();?>
    <?php else : ?>
        <p>No Blog Posts found</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>