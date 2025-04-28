</main>
    <footer>
        <div class="container">
            <div class="inner-footer">
                <div class="footer-1">
                    <?php
                        if (function_exists('the_custom_logo') && has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
                        }
                    ?>
                    <?php
                        $ielts_text = get_theme_mod('ielts_text', 'Achieve your dreams with GK PRO Academy, a trusted platform for IELTS preparation. We combine expert guidance, innovative tools, and flexible learning options to help students worldwide excel in their IELTS exams.');
                        echo '<p>' . esc_html($ielts_text) . '</p>';
                    ?>

                </div>
                <div class="footer-tl1">
                    <div class="footer-courses">
                        <h3 class="courses">Courses</h3>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-menu2',
                                'menu_id'        => 'footer-menu2',
                                'menu_class'     => 'menu courses-list',
                                'container'      => 'nav',
                                'container_class' => 'dropdown-menu-container',
                            ) );
                        ?>
                    </div>
                    <div class="footer-quicklinks">
                        <h3 class="courses">Quick Links</h3>
                        
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-menu1',
                                'menu_id'        => 'footer-menu1',
                                'menu_class'     => 'menu courses-list',
                                'container'      => 'nav',
                                'container_class' => 'dropdown-menu-container',
                            ) );
                        ?>
                    </div>
                    <div class="footer-address">
                        <h3 class="courses">Our Addresss</h3>
                        <div class="footer-tl">
                            <?php $footer_address = get_theme_mod('footer_address', '25055 Arthur RoadEscalon, California 95320, US');
                            if (!empty($footer_address)) { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/location.svg" alt="address">
                                <p  class="address-list">
                                    <?php echo esc_html($footer_address); ?>
                                </p>
                            <?php } ?>
                        </div>
                        <div class="footer-tl">
                            <a   class="address-list" href="tel:<?php echo esc_attr(get_theme_mod('footer_phone', '+1 (234) 567 890')); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call.svg" alt="Phone">
                                <?php echo esc_html(get_theme_mod('footer_phone', '(209) 838-8307')); ?>
                            </a>
                        </div>
                        <div class="footer-tl">
                        <a  class="address-list" href="mailto:<?php echo esc_attr(get_theme_mod('footer_email', 'momentic@mail.com')); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mail.svg" alt="Mail">
                            <?php echo esc_html(get_theme_mod('footer_email', 'walnuts@deruosinut.com')); ?>
                        </a>
                        </div>
                        <div class="social-logos">
                        <a href="<?php echo esc_url(get_theme_mod('footer_insta_link', '#')); ?>" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/insta-1.svg" alt="Insta Logo">
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('footer_youtube_link', '#')); ?>" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.svg" alt="Youtube Logo">
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('footer_twitter_link', '#')); ?>" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twittre.svg" alt="Twitter Logo">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-inner-footer">
                <p><?php echo esc_html(get_theme_mod('footer_copyright_text', 'Copyright © ' . date('Y') . ' GK Pro Academy')); ?></p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>