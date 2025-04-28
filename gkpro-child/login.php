<?php
// Template Name: Login
get_header();
?>    
    <section class="login-page">
        <div class="login-body">
            <div class="login-content1">
                <div class="owl-carousel login-carousel">
                    <div class="item">
                        <div class="login-text">
                            <img src="<?php the_field('login_carousel1'); ?>" alt="">
                            <h3><?php the_field('login_carousel_heading1'); ?></h3>
                            <p><?php the_field('login_carousel_description1'); ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="login-text">
                            <img src="<?php the_field('login_carousel2'); ?>" alt="">
                            <h3><?php the_field('login_carousel_heading2'); ?></h3>
                            <p><?php the_field('login_carousel_desccription2'); ?></p>
                        </div>   
                    </div>
                    <div class="item">
                        <div class="login-text">
                            <img src="<?php the_field('login_carousel3'); ?>" alt="">
                            <h3><?php the_field('login_carousel_heading3'); ?></h3>
                            <p><?php the_field('login_carousel_desccription3'); ?></p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="login-content">
                <?php
                    echo do_shortcode('[tutor_student_registration_form]');
                ?>
            </div>
        </div>
    </section>

    <?php
get_footer();
?>