<?php get_header(); ?>

<div class="container">
    <div class="archive-title">
        <h2>Anchovies!</h2>
        <h4>sorry, I mean...</h4>
        <h2>Archives!</h2>
    </div>

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
                    <?php the_excerpt(); ?>
                    <a class="read-more-link" href="<?php the_permalink(); ?>">Read More</a>
                </div>

            <?php endwhile; ?>
        </div>
        <?php the_posts_pagination();
        ?>

    <?php else : ?>
        <p>No Blog Posts found</p>
    <?php endif; ?>

</div>



<?php get_footer(); ?>