<?php
// Template Name: About
get_header();
?>

        <section class="our-courses-banner abt-banner">
            <div class="container">
                <div class="our-course-content">
                    <h1><?php the_field('contact_heading'); ?></h1>
                    <div class="banner-img">
                        <img src="<?php the_field('contact_image'); ?>" alt="">
                    </div>
                </div>
            </div>
            
        </section>

        <section class="empowering-student">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="es-cont">
                            <img src="<?php the_field('about_image'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="es-cont">
                            <h2><?php the_field('about_subheading'); ?></h2>
                            <h3><?php the_field('about_heading'); ?></h3>
                            <p><?php the_field('about_description'); ?></p>
                            <ul>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/checkmark.svg" alt=""><?php the_field('about_list1'); ?></li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/checkmark.svg" alt=""><?php the_field('about_list2'); ?></li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/checkmark.svg" alt=""><?php the_field('about_list3'); ?></li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/checkmark.svg" alt=""><?php the_field('about_list4'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-different">
            <div class="container">
                <div class="wdif-header">
                    <h3><?php the_field('different_subheading'); ?></h3>
                    <h4><?php the_field('different_heading'); ?></h4>
                    <p><?php the_field('different_description'); ?></p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="wdif-cont">
                            <img src="<?php the_field('different_grid_icon1'); ?>" alt="">
                            <h4><?php the_field('different_grid_heading1'); ?></h4>
                            <p><?php the_field('different_grid_text1'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="wdif-cont">
                            <img src="<?php the_field('different_grid_icon2'); ?>" alt="">
                            <h4><?php the_field('different_grid_heading2'); ?></h4>
                            <p><?php the_field('different_grid_text2'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="wdif-cont">
                            <img src="<?php the_field('different_grid_icon3'); ?>" alt="">
                            <h4><?php the_field('different_grid_heading3'); ?></h4>
                            <p><?php the_field('different_grid_text3'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-team">
            <div class="container">
                <div class="ot-header">
                    <h3><?php the_field('about_team_subheading'); ?></h3>
                    <h4><?php the_field('about_team_heading'); ?></h4>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="ot-cont">
                            <div class="ot-img">
                                <img src="<?php the_field('about_team_member_image1'); ?>" alt="">
                            </div>
                            <div class="ot-text">
                                <h5><?php the_field('about_team_member_name1'); ?></h5>
                                <p><?php the_field('about_team_member_position1'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ot-cont">
                            <div class="ot-img">
                                <img src="<?php the_field('about_team_member_image2'); ?>" alt="">
                            </div>
                            <div class="ot-text">
                                <h5><?php the_field('about_team_member_name2'); ?></h5>
                                <p><?php the_field('about_team_member_position2'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ot-cont">
                            <div class="ot-img">
                                <img src="<?php the_field('about_team_member_image3'); ?>" alt="">
                            </div>
                            <div class="ot-text">
                                <h5><?php the_field('about_team_member_name3'); ?></h5>
                                <p><?php the_field('about_team_member_position3'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="abt-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="abtt-cont">
                            <img src="<?php the_field('about_testimonial_image'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel abt-test-carousel">
                            <div class="item">
                                <div class="abt-test-content">
                                    <img src="<?php the_field('about_testimonial_carousel_icon1'); ?>" alt="">
                                    <p><?php the_field('about_testimonial_carousel_text1'); ?></p>
                                    <h4><?php the_field('about_testimonial_carousel_prof_name1'); ?> <span><?php the_field('about_testimonial_carousel_prof_position1'); ?></span></h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="abt-test-content">
                                    <img src="<?php the_field('about_testimonial_carousel_icon2'); ?>" alt="">
                                    <p><?php the_field('about_testimonial_carousel_text2'); ?></p>
                                    <h4><?php the_field('about_testimonial_carousel_prof_name2'); ?> <span><?php the_field('about_testimonial_carousel_prof_position2'); ?></span></h4>
                                </div>   
                            </div>
                            <div class="item">
                                <div class="abt-test-content">
                                    <img src="<?php the_field('about_testimonial_carousel_icon3'); ?>" alt="">
                                    <p><?php the_field('about_testimonial_carousel_text3'); ?></p>
                                    <h4><?php the_field('about_testimonial_carousel_prof_name3'); ?> <span><?php the_field('about_testimonial_carousel_prof_position3'); ?></span></h4>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="achievw-dream">
            <div class="container">
                <div class="dream-section">
                    <h3 class="dream-heading"><?php the_field('dream_subheading'); ?></h3>
                    <h4 class="ace-your-career"><?php the_field('dream_heading'); ?>
                    </h4>
        
                    <div class="const-btn">
        
                        <a href="<?php the_field('dream_get_free_consultation_url'); ?>" class="free-consultation"><?php the_field('dream_get_free_consultation_text'); ?></a>
                        <a href="<?php the_field('dream_enroll_now_url'); ?>" class="enroll-now"><?php the_field('dream_enroll_now_text'); ?></a>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
?>