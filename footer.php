<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div>
            <img class="hml-logo" src="<?php echo get_template_directory_uri() . '/assets/img/hml-logo.png' ?>" alt="HML logo">
            <p>We are a dedicated St. Albert and Edmonton landscaping design and construction team who value the beauty that great design and workmanship can bring to a space.</p>
            <div class="social-media-links">
                <ul>
                    <li>
                        <a href="#">
                            <img class="social-media-logo" src="<?php echo get_template_directory_uri() . '/assets/img/facebook.svg' ?>" alt="hml facebook logo">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img class="social-media-logo" src="<?php echo get_template_directory_uri() . '/assets/img/instagram.svg' ?>" alt="hml instagram logo">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img class="social-media-logo" src="<?php echo get_template_directory_uri() . '/assets/img/linkedin.svg' ?>" alt="hml linkedin logo">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img class="social-media-logo" src="<?php echo get_template_directory_uri() . '/assets/img/mail.png' ?>" alt="hml mail logo">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img class="social-media-logo" src="<?php echo get_template_directory_uri() . '/assets/img/pinterest.png' ?>" alt="hml pinterest logo">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img class="social-media-logo" src="<?php echo get_template_directory_uri() . '/assets/img/twitter.svg' ?>" alt="hml twitter logo">
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="footer-navigation">
            <div>
                <h2>Services</h2>
                <?php dynamic_sidebar('services-links-widgets'); ?>
            </div>
            <div>
                <h2>Explore</h2>
                <?php dynamic_sidebar('explore-links-widgets'); ?>
            </div>
            <div>
                <h2>Contact</h2>
                <a href="https://maps.app.goo.gl/LGwCntG22wchSLvdA">54314 RR 255 Sturgeon County, AB T8T0T8</a>
                <a href="mailto:info@hmlconstruction.com">info@hmlconstruction.com</a>
                <a href="#">780-460-2088</a>
            </div>

        </div>
    </div>
</footer>
</body>

</html>