<?php
// Template Name: Home
get_header();
?>
<section class="first-section">
            <div class="container">
                <div class="first-left-section">
                    <p class="pathway-success"><?php the_field('sub_heading'); ?></p>
                    <h1 class="achieve-heading"><?php the_field('heading'); ?></h1>

                    <div class="two-weeks">
                        <span><?php the_field('weeks'); ?></span>
                    </div>

                    <p class="with-expert"><?php the_field('description'); ?></p>

                    <div class="first-section-btns">
                        <a href="<?php the_field('try_it_now_button_url'); ?>" class="try-btn"><?php the_field('try_it_now_text'); ?></a>
                        <a href="<?php the_field('consultation_url'); ?>" class="free-btn"><?php the_field('get_free_consultation_text'); ?></a>
                    </div>
                </div>
                <div class="first-right-section">
                <img src="<?php the_field('banner_image'); ?>" class="envato-labs" alt="" srcset="">
                </div>
            </div>

            <div class="red-line">
                <ul>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text1'); ?></li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text2'); ?></li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text3'); ?></li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text1'); ?></li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text2'); ?></li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text3'); ?></li>
                </ul>
            </div>
        </section>

        <section class="second-section">
            <div class="container">
                <h2 class="our-features"><?php the_field('feature_sub_heading'); ?></h2>
                <h3 class="learn-practice-succeed"><?php the_field('feature_heading'); ?></h3>

                <div class="cards-section">
                    <div class="first-card">
                        <div class="img-1">
                            <img src="<?php the_field('feature_image1'); ?>" alt="">
                        </div>
                        <div class="card-content">
                            <h3><?php the_field('feature_heading1'); ?></h3>
                            <p><?php the_field('feature_text1'); ?></p>
                        </div>
                    </div>
                    <div class="first-card">
                        <div class="img-1">
                            <img src="<?php the_field('feature_image2'); ?>" alt="">
                        </div>
                        <div class="card-content">
                            <h3><?php the_field('feature_heading2'); ?></h3>
                            <p><?php the_field('feature_text2'); ?></p>
                        </div>
                    </div>
                    <div class="first-card">
                        <div class="img-1">
                            <img src="<?php the_field('feature_image3'); ?>" alt="">
                        </div>
                        <div class="card-content">
                            <h3><?php the_field('feature_heading3'); ?></h3>
                            <p><?php the_field('feature_text3'); ?></p>
                        </div>
                    </div>
                    <div class="first-card">
                        <div class="img-1">
                            <img src="<?php the_field('feature_image4'); ?>" alt="">
                        </div>
                        <div class="card-content">
                            <h3><?php the_field('feature_heading4'); ?></h3>
                            <p><?php the_field('feature_text4'); ?></p>
                        </div>
                    </div>
                    <div class="first-card">
                        <div class="img-1">
                            <img src="<?php the_field('feature_image5'); ?>" alt="">
                        </div>
                        <div class="card-content">
                            <h3><?php the_field('feature_heading5'); ?></h3>
                            <p><?php the_field('feature_text5'); ?></p>
                        </div>
                    </div>
                    <div class="first-card">
                        <div class="img-1">
                            <img src="<?php the_field('feature_image6'); ?>" alt="">
                        </div>
                        <div class="card-content">
                            <h3><?php the_field('feature_heading6'); ?></h3>
                            <p><?php the_field('feature_text6'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="third-section">

            <div class="container">
                <h2 class="our-approach"><?php the_field('approach_sub_heading'); ?></h2>
                <h3 class="our-ielts"><?php the_field('approach_heading'); ?></h3>

                <div class="approach-container">
                    <div class="approach-img">
                        <img src="<?php the_field('approach_image'); ?>" class="child-img" alt="">
                    </div>
                    <div class="approach-content">
                        <div class="card-tl">
                            <div class="card-tl-img">
                                <img src="<?php the_field('approach_icon1'); ?>" class="learn-icon" alt="">
                            </div>
                            <div class="card-tl-content">
                                <h6 class="learn-heading"><?php the_field('approach_heading1'); ?></h6>
                                <p class="live-class"><?php the_field('approach_text1'); ?></p>
                            </div>

                        </div>
                        <div class="card-tl">
                            <div class="card-tl-img">
                                <img src="<?php the_field('approach_icon2'); ?>" class="learn-icon" alt="">
                            </div>

                            <div class="card-tl-content">
                                <h6 class="learn-heading"><?php the_field('approach_heading2'); ?></h6>
                                <p class="live-class"><?php the_field('approach_text2'); ?></p>
                            </div>

                        </div>
                        <div class="card-tl">
                            <div class="card-tl-img">
                                <img src="<?php the_field('approach_icon3'); ?>" class="learn-icon" alt="">
                            </div>
                            <div class="card-tl-content">
                                <h6 class="learn-heading"><?php the_field('approach_heading3'); ?></h6>
                                <p class="live-class"><?php the_field('approach_text3'); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="courses-section">
            <div class="container">
                <h2 class="our-courses">Our Courses</h2>
                <h3 class="top-courses">Our Top Courses</h3>
                <div class="tab-course">
                    <div class="tabs-inner-section">
                        <a href="#" class="tab-link active" data-tab="foundation">IELTS Foundation</a>
                        <a href="#" class="tab-link" data-tab="academic">IELTS Academic</a>
                        <a href="#" class="tab-link" data-tab="business">Business Communication</a>
                        <a href="#" class="tab-link" data-tab="soft-skills">Soft Skills</a>
                        <a href="#" class="tab-link" data-tab="combos">Combos</a>
                    </div>
                </div>
            </div>

            <div class="lower-tab-content">
                <div class="tab-cards" id="foundation">
                    <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 20, 
                            'product_cat'    => 'ielts-foundation', 
                        );
                        $courses = new WP_Query($args);
                        if ($courses->have_posts()) :
                        ?>
                        <?php while ($courses->have_posts()) : $courses->the_post(); ?>
                        <div class="cardd-tl">
                            <div class="card-tl-img">
                                <!-- <img src="./assets/images/Frame-40095.png" class="frame-tl" alt=""> -->
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                            <div class="card-tl-content">
                                <a href=""><?php the_title(); ?></a>
                                <!-- <p class="master">Master the essentials in 2 weeks with focused lessons, personalized
                                    practice, and 11 mock tests to achieve your dream score!</p> -->
                                    <p class="master">  <?php echo get_the_excerpt(); ?></p>
                                <span class="duration-weeks">Duration: 2 weeks</span>
                                <div class="course-modules">
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/module.svg' ); ?>" alt=""> 10 Modules
                            </div>
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Video.svg' ); ?>" alt=""> 20 Video
                            </div>
                        </div>
                            </div>
                            <div class="price-tl">
                                <p><?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_price', true); ?></p>
                                <a href="" class="know-more">Know More</a>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>

                <div class="tab-cards" id="academic" style="display: none;">
                <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 20, 
                            'product_cat'    => 'ielts-academic', 
                        );
                        $courses = new WP_Query($args);
                        if ($courses->have_posts()) :
                        ?>
                        <?php while ($courses->have_posts()) : $courses->the_post(); ?>
                        <div class="cardd-tl">
                            <div class="card-tl-img">
                                <!-- <img src="./assets/images/Frame-40095.png" class="frame-tl" alt=""> -->
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                            <div class="card-tl-content">
                                <a href=""><?php the_title(); ?></a>
                                <!-- <p class="master">Master the essentials in 2 weeks with focused lessons, personalized
                                    practice, and 11 mock tests to achieve your dream score!</p> -->
                                    <p class="master">  <?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <span class="duration-weeks">Duration: 2 weeks</span>
                                <div class="course-modules">
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/module.svg' ); ?>" alt=""> 10 Modules
                            </div>
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Video.svg' ); ?>" alt=""> 20 Video
                            </div>
                        </div>
                            </div>
                            <div class="price-tl">
                                <p><?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_price', true); ?></p>
                                <a href="" class="know-more">Know More</a>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>

                <div class="tab-cards" id="business" style="display: none;">
                <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 20, 
                            'product_cat'    => 'business-communication', 
                        );
                        $courses = new WP_Query($args);
                        if ($courses->have_posts()) :
                        ?>
                        <?php while ($courses->have_posts()) : $courses->the_post(); ?>
                        <div class="cardd-tl">
                            <div class="card-tl-img">
                                <!-- <img src="./assets/images/Frame-40095.png" class="frame-tl" alt=""> -->
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                            <div class="card-tl-content">
                                <a href=""><?php the_title(); ?></a>
                                <!-- <p class="master">Master the essentials in 2 weeks with focused lessons, personalized
                                    practice, and 11 mock tests to achieve your dream score!</p> -->
                                    <p class="master">  <?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <span class="duration-weeks">Duration: 2 weeks</span>
                                <div class="course-modules">
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/module.svg' ); ?>" alt=""> 10 Modules
                            </div>
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Video.svg' ); ?>" alt=""> 20 Video
                            </div>
                        </div>
                            </div>
                            <div class="price-tl">
                                <p><?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_price', true); ?></p>
                                <a href="" class="know-more">Know More</a>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>

                <div class="tab-cards" id="soft-skills" style="display: none;">
                <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 20, 
                            'product_cat'    => 'soft-skills', 
                        );
                        $courses = new WP_Query($args);
                        if ($courses->have_posts()) :
                        ?>
                        <?php while ($courses->have_posts()) : $courses->the_post(); ?>
                        <div class="cardd-tl">
                            <div class="card-tl-img">
                                <!-- <img src="./assets/images/Frame-40095.png" class="frame-tl" alt=""> -->
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                            <div class="card-tl-content">
                                <a href=""><?php the_title(); ?></a>
                                <!-- <p class="master">Master the essentials in 2 weeks with focused lessons, personalized
                                    practice, and 11 mock tests to achieve your dream score!</p> -->
                                    <p class="master">  <?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <span class="duration-weeks">Duration: 2 weeks</span>
                                <div class="course-modules">
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/module.svg' ); ?>" alt=""> 10 Modules
                            </div>
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Video.svg' ); ?>" alt=""> 20 Video
                            </div>
                        </div>
                            </div>
                            <div class="price-tl">
                                <p><?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_price', true); ?></p>
                                <a href="" class="know-more">Know More</a>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>

                <div class="tab-cards" id="combos" style="display: none;">
                <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 20, 
                            'product_cat'    => 'combos', 
                        );
                        $courses = new WP_Query($args);
                        if ($courses->have_posts()) :
                        ?>
                        <?php while ($courses->have_posts()) : $courses->the_post(); ?>
                        <div class="cardd-tl">
                            <div class="card-tl-img">
                                <!-- <img src="./assets/images/Frame-40095.png" class="frame-tl" alt=""> -->
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                            <div class="card-tl-content">
                                <a href=""><?php the_title(); ?></a>
                                <!-- <p class="master">Master the essentials in 2 weeks with focused lessons, personalized
                                    practice, and 11 mock tests to achieve your dream score!</p> -->
                                    <p class="master">  <?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <span class="duration-weeks">Duration: 2 weeks</span>
                                <div class="course-modules">
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/module.svg' ); ?>" alt=""> 10 Modules
                            </div>
                            <div class="cmdiv">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Video.svg' ); ?>" alt=""> 20 Video
                            </div>
                        </div>
                            </div>
                            <div class="price-tl">
                                <p><?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_price', true); ?></p>
                                <a href="" class="know-more">Know More</a>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>

                <!-- Add more tab-cards for other tabs -->
            </div>


            <div class="container">
                <div class="pagination">
                    <p class="page-number"><strong>01</strong>/20</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Line 2.svg" class="line-tl" alt="" srcset="">
                    <div class="arrows-btn">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-tl" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-tl" alt="">
                    </div>
                </div>

            </div>



        </section>

        <section class="testimonial">
            <h2 class="our-approach"><?php the_field('testimonial_sub_heading'); ?></h2>
            <h3 class="top-courses"><?php the_field('testimonial_heading'); ?></h3>


            <div class="test-card-carousel owl-carousel owl-theme">
                <div class="item">
                <div class="card-parent-container">
                    <div class="test-card">
                        <img src="<?php the_field('testimonial_image1'); ?>" alt="">
                        <p class="test-para"><?php the_field('testimonial_text1'); ?>
                        </p>

                        <span class="author-name"><?php the_field('testimonial_prof1'); ?></span>
                    </div>

                </div>
                </div>
                <!-- <! ----- !> -->
                <div class="item">
                <div class="card-parent-container">
                    <div class="test-card">
                        <img src="<?php the_field('testimonial_image2'); ?>" alt="">
                        <p><?php the_field('testimonial_text2'); ?>
                        </p>

                        <span class="author-name"><?php the_field('testimonial_prof2'); ?></span>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="card-parent-container">
                    <div class="test-card">
                        <img src="<?php the_field('testimonial_image3'); ?>" alt="">
                        <p><?php the_field('testimonial_text3'); ?>
                        </p>

                        <span class="author-name"><?php the_field('testimonial_prof3'); ?></span>
                    </div>

                </div>
                </div>
                <div class="item">
                <div class="card-parent-container">
                    <div class="test-card">
                        <img src="<?php the_field('testimonial_image4'); ?>" alt="">
                        <p><?php the_field('testimonial_text4'); ?>
                        </p>

                        <span class="author-name"><?php the_field('testimonial_prof4'); ?></span>
                    </div>

                </div>
                </div>
            </div>

            <div class="container">
                <div class="custom-pagination pagination">
                    <p class="page-number"><span id="current-slide">01</span>/<span id="total-slides"></span></p>
                    <div class="nav-buttons arrows-btn">
                        <button id="prev-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-test-tl" alt=""></button>
                        <button id="next-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-test-tl" alt=""></button>
                    </div>
                </div>
            </div>

        </section>

        <section class="tutors">
           
                <h2 class="top-tutors"><?php the_field('tutor_heading'); ?></h2>


                <div id="owl-demo" class="owl-carousel owl-theme tutor-carousel">
          
                    <div class="item">
                        <div class="cards-container">
                            <img src="<?php the_field('tutor_image1'); ?>" class="propter" alt="">
                            <div class="tutor-content">
                                <p class="tutor-name"><?php the_field('tutor_name1'); ?></p>
                                <div class="tutor-content-1">
                                    <p><?php the_field('tutor_text1'); ?></p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot.svg" alt="">
                                    <p><?php the_field('tutor_class1'); ?></p>
                                </div>
    
                            </div>
                        </div>

                    </div>

                    <div class="item">
                        <div class="cards-container">
                            <img src="<?php the_field('tutor_image2'); ?>" class="propter" alt="">
                            <div class="tutor-content">
                                <p class="tutor-name"><?php the_field('tutor_name2'); ?></p>
                                <div class="tutor-content-1">
                                    <p><?php the_field('tutor_text2'); ?></p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot.svg" alt="">
                                    <p><?php the_field('tutor_class2'); ?></p>
                                </div>
    
                            </div>
                        </div>

                    </div>

                    <div class="item">
                        <div class="cards-container">
                            <img src="<?php the_field('tutor_image3'); ?>" class="propter" alt="">
                            <div class="tutor-content">
                                <p class="tutor-name"><?php the_field('tutor_name3'); ?></p>
                                <div class="tutor-content-1">
                                    <p><?php the_field('tutor_text3'); ?></p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot.svg" alt="">
                                    <p><?php the_field('tutor_class3'); ?></p>
                                </div>
    
                            </div>
                        </div>

                    </div>

                    <div class="item">
                        <div class="cards-container">
                            <img src="<?php the_field('tutor_image4'); ?>" class="propter" alt="">
                            <div class="tutor-content">
                                <p class="tutor-name"><?php the_field('tutor_name4'); ?></p>
                                <div class="tutor-content-1">
                                    <p><?php the_field('tutor_text4'); ?></p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot.svg" alt="">
                                    <p><?php the_field('tutor_class4'); ?></p>
                                </div>
    
                            </div>
                        </div>

                    </div>

                    <div class="item">
                        <div class="cards-container">
                            <img src="<?php the_field('tutor_image5'); ?>" class="propter" alt="">
                            <div class="tutor-content">
                                <p class="tutor-name"><?php the_field('tutor_name5'); ?></p>
                                <div class="tutor-content-1">
                                    <p><?php the_field('tutor_text5'); ?></p>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot.svg" alt="">
                                    <p><?php the_field('tutor_class5'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="faq-section">
            <div class="container">
                <h2 class="our-approach"><?php the_field('faq_subheading'); ?></h2>
                <h3 class="top-courses"><?php the_field('faq_heading'); ?></h3>

                <div class="faq">
                    <div class="faq-cards-1">
                        <div class="faq-card-content active">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading1'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: block;"><?php the_field('faq_text1'); ?></p>
                        </div>
                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading2'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text2'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading3'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text3'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading4'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text4'); ?></p>
                        </div>
                    </div>
                    <div class="faq-cards-2">
                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading5'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text5'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading6'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text6'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading7'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text7'); ?></p>
                        </div>
                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading8'); ?></h4>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text8'); ?></p>
                        </div>
                    </div>
                </div>

                
            </div>
        </section>
        <section class="faq-sectiondream">
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