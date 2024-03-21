<?php wp_footer(); ?>
<footer>
    <div class="container">
        <h2>this a footer</h2>
        <div class="widgets">
            <!-- 1st widget -->
            <?php dynamic_sidebar('footer-column-1'); ?>

            <!-- 2nd widget -->
            <?php dynamic_sidebar('footer-column-2'); ?>
        </div>
    </div>

</footer>
</body>

</html>