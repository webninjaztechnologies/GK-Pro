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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text1'); ?></li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text2'); ?></li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text3'); ?></li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text1'); ?></li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
                    <li><?php the_field('marquee_text2'); ?></li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-dot.svg" alt="" srcset="">
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
                        <div class="tabs">
                            <div class="tabs-div">
                                <a class="tab active" href="#one">IELTS Foundation</a>
                            </div>
                            <div class="tabs-div">
                                <a class="tab" href="#two">IELTS Academic</a>
                            </div>
                            <div class="tabs-div">
                                <a class="tab" href="#three">Business Communication</a>
                            </div>
                            <div class="tabs-div">
                                <a class="tab" href="#four">Soft Skills</a>
                            </div>
                            <div class="tabs-div">
                                <a class="tab" href="#five">Combos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lower-tab-content">
                <div id="one" class="content show">
                <div class="foundation-carousel owl-carousel owl-theme">
                    <?php
                        // Check if Tutor LMS functions are available
                        if (function_exists('tutor_utils')) {
                            $course_category_slug = 'ielts-academic';
                            // Define the Tutor LMS course query
                            $args = array(
                                'post_type' => 'courses', // Your custom post type
                                'posts_per_page' => 6,    // Adjust the number of courses as needed
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'course-category', // Tutor LMS course category taxonomy
                                        'field' => 'slug',               // Use 'slug' or 'term_id'
                                        'terms' => $course_category_slug, // Replace with the desired category slug
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);

                            // Check if any courses are found
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    
                                    // Safely fetch course price and duration
                                    $course_id = get_the_ID();
                                    $course_price = 'Free';  // Default to Free
                                    $course_duration = 'N/A';

                                    // Fetch the course price and clean the output
                                    if (tutor_utils()->is_course_purchasable()) {
                                        $raw_price = tutor_utils()->get_course_price();
                                        $course_price = wp_strip_all_tags($raw_price); // Clean HTML tags from the price
                                    }

                                    // Fetch the course duration
                                    $duration_meta = get_post_meta($course_id, '_tutor_course_duration', true);
                                    if (!empty($duration_meta)) {
                                        $course_duration = $duration_meta;
                                    }
                                    ?>
                                    <div class="item">
                                        <div class="cardd-tl active-card">
                                            <div class="card-tl-img">
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="frame-tl" alt="<?php the_title(); ?>">
                                                <?php } else { ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Frame-40095.png'); ?>" class="frame-tl" alt="Default Image">
                                                <?php } ?>
                                                <div class="cr-reviews">
                                                <?php
                                                    // Get the course rating details
                                                    $rating = tutor_utils()->get_course_rating(get_the_ID());

                                                    if ($rating && isset($rating->rating_avg)) {
                                                        // Display the star rating and average rating
                                                        $average_rating = number_format($rating->rating_avg, 1); // Format to one decimal place
                                                        $total_reviews = $rating->rating_count; // Total number of reviews

                                                        // Display the star image and average rating
                                                        echo '<span class="star-image"><img src="' . esc_url(get_template_directory_uri() . '/assets/images/star-fill.svg') . '" alt="Star Image"></span> ' . esc_html($average_rating);
                                                        // Uncomment the next line to display the number of reviews
                                                        // echo ' (' . esc_html($total_reviews) . ' reviews)';
                                                    } else {
                                                        echo '<span class="no-reviews">No reviews yet</span>';
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="card-tl-content">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <p class="master"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                <span class="duration-weeks">
                                                    <?php  
                                                        $course_duration = get_tutor_course_duration_context($course_id);
                                                        if ($course_duration) {
                                                            // Strip HTML tags and display the duration
                                                            echo 'Duration: ' . esc_html(wp_strip_all_tags($course_duration));
                                                        } else {
                                                            echo 'Duration: Not available';
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="price-tl">
                                                <p>
                                                    <?php
                                                        $course_price = trim(preg_replace('/\s+/', ' ', $course_price));
                                                        preg_match_all('/₹[\d,\.]+/', $course_price, $matches);

                                                        if (!empty($matches[0])) {
                                                            foreach ($matches[0] as $price) {
                                                                echo '<span class="cr-price1">' . esc_html($price) . '</span>';
                                                            }
                                                        } else {
                                                            echo '<span class="cr-price2">' . esc_html($course_price) . '</span>';
                                                        }
                                                    ?>
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="know-more">Know More</a>
                                            </div>      
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No courses found.</p>';
                            }
                        } else {
                            echo '<p>Error: Tutor LMS plugin is not activated or available.</p>';
                        }
                    ?>
                </div> 
                <div class="controls">
                    <p class="page-number"><span class="current-slide"><strong>01</strong></span>/<span class="total-slides">00</span></p>
                    <div class="arrows-btn">
                        <button class="custom-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-tl" alt=""></button>
                        <button class="custom-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-tl" alt=""></button>
                    </div>
                </div>
            </div>

            <div id="two" class="content">
                <div class="foundation-carousel owl-carousel owl-theme">
                    <?php
                        // Check if Tutor LMS functions are available
                        if (function_exists('tutor_utils')) {
                            $course_category_slug = 'foundation-course';
                            // Define the Tutor LMS course query
                            $args = array(
                                'post_type' => 'courses', // Your custom post type
                                'posts_per_page' => 6,    // Adjust the number of courses as needed
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'course-category', // Tutor LMS course category taxonomy
                                        'field' => 'slug',               // Use 'slug' or 'term_id'
                                        'terms' => $course_category_slug, // Replace with the desired category slug
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);

                            // Check if any courses are found
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    
                                    // Safely fetch course price and duration
                                    $course_id = get_the_ID();
                                    $course_price = 'Free';  // Default to Free
                                    $course_duration = 'N/A';

                                    // Fetch the course price and clean the output
                                    if (tutor_utils()->is_course_purchasable()) {
                                        $raw_price = tutor_utils()->get_course_price();
                                        $course_price = wp_strip_all_tags($raw_price); // Clean HTML tags from the price
                                    }

                                    // Fetch the course duration
                                    $duration_meta = get_post_meta($course_id, '_tutor_course_duration', true);
                                    if (!empty($duration_meta)) {
                                        $course_duration = $duration_meta;
                                    }
                                    ?>
                                    <div class="item">
                                        <div class="cardd-tl active-card">
                                            <div class="card-tl-img">
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="frame-tl" alt="<?php the_title(); ?>">
                                                <?php } else { ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Frame-40095.png'); ?>" class="frame-tl" alt="Default Image">
                                                <?php } ?>
                                                <div class="cr-reviews">
                                                <?php
                                                    // Get the course rating details
                                                    $rating = tutor_utils()->get_course_rating(get_the_ID());

                                                    if ($rating && isset($rating->rating_avg)) {
                                                        // Display the star rating and average rating
                                                        $average_rating = number_format($rating->rating_avg, 1); // Format to one decimal place
                                                        $total_reviews = $rating->rating_count; // Total number of reviews

                                                        // Display the star image and average rating
                                                        echo '<span class="star-image"><img src="' . esc_url(get_template_directory_uri() . '/assets/images/star-fill.svg') . '" alt="Star Image"></span> ' . esc_html($average_rating);
                                                        // Uncomment the next line to display the number of reviews
                                                        // echo ' (' . esc_html($total_reviews) . ' reviews)';
                                                    } else {
                                                        echo '<span class="no-reviews">No reviews yet</span>';
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="card-tl-content">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <p class="master"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                <span class="duration-weeks">
                                                    <?php  
                                                        $course_duration = get_tutor_course_duration_context($course_id);
                                                        if ($course_duration) {
                                                            // Strip HTML tags and display the duration
                                                            echo 'Duration: ' . esc_html(wp_strip_all_tags($course_duration));
                                                        } else {
                                                            echo 'Duration: Not available';
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="price-tl">
                                                <p>
                                                    <?php
                                                        $course_price = trim(preg_replace('/\s+/', ' ', $course_price));
                                                        preg_match_all('/₹[\d,\.]+/', $course_price, $matches);

                                                        if (!empty($matches[0])) {
                                                            foreach ($matches[0] as $price) {
                                                                echo '<span class="cr-price1">' . esc_html($price) . '</span>';
                                                            }
                                                        } else {
                                                            echo '<span class="cr-price2">' . esc_html($course_price) . '</span>';
                                                        }
                                                    ?>
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="know-more">Know More</a>
                                            </div>      
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No courses found.</p>';
                            }
                        } else {
                            echo '<p>Error: Tutor LMS plugin is not activated or available.</p>';
                        }
                    ?>
                </div> 
                <div class="controls">
                    <p class="page-number"><span class="current-slide"><strong>01</strong></span>/<span class="total-slides">00</span></p>
                    <div class="arrows-btn">
                        <button class="custom-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-tl" alt=""></button>
                        <button class="custom-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-tl" alt=""></button>
                    </div>
                </div>
            </div>
            <div id="three" class="content">
                <div class="foundation-carousel owl-carousel owl-theme">
                    <?php
                        // Check if Tutor LMS functions are available
                        if (function_exists('tutor_utils')) {
                            $course_category_slug = 'business-communication';
                            // Define the Tutor LMS course query
                            $args = array(
                                'post_type' => 'courses', // Your custom post type
                                'posts_per_page' => 6,    // Adjust the number of courses as needed
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'course-category', // Tutor LMS course category taxonomy
                                        'field' => 'slug',               // Use 'slug' or 'term_id'
                                        'terms' => $course_category_slug, // Replace with the desired category slug
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);

                            // Check if any courses are found
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    
                                    // Safely fetch course price and duration
                                    $course_id = get_the_ID();
                                    $course_price = 'Free';  // Default to Free
                                    $course_duration = 'N/A';

                                    // Fetch the course price and clean the output
                                    if (tutor_utils()->is_course_purchasable()) {
                                        $raw_price = tutor_utils()->get_course_price();
                                        $course_price = wp_strip_all_tags($raw_price); // Clean HTML tags from the price
                                    }

                                    // Fetch the course duration
                                    $duration_meta = get_post_meta($course_id, '_tutor_course_duration', true);
                                    if (!empty($duration_meta)) {
                                        $course_duration = $duration_meta;
                                    }
                                    ?>
                                    <div class="item">
                                        <div class="cardd-tl active-card">
                                            <div class="card-tl-img">
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="frame-tl" alt="<?php the_title(); ?>">
                                                <?php } else { ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Frame-40095.png'); ?>" class="frame-tl" alt="Default Image">
                                                <?php } ?>
                                                <div class="cr-reviews">
                                                <?php
                                                    // Get the course rating details
                                                    $rating = tutor_utils()->get_course_rating(get_the_ID());

                                                    if ($rating && isset($rating->rating_avg)) {
                                                        // Display the star rating and average rating
                                                        $average_rating = number_format($rating->rating_avg, 1); // Format to one decimal place
                                                        $total_reviews = $rating->rating_count; // Total number of reviews

                                                        // Display the star image and average rating
                                                        echo '<span class="star-image"><img src="' . esc_url(get_template_directory_uri() . '/assets/images/star-fill.svg') . '" alt="Star Image"></span> ' . esc_html($average_rating);
                                                        // Uncomment the next line to display the number of reviews
                                                        // echo ' (' . esc_html($total_reviews) . ' reviews)';
                                                    } else {
                                                        echo '<span class="no-reviews">No reviews yet</span>';
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="card-tl-content">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <p class="master"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                <span class="duration-weeks">
                                                    <?php  
                                                        $course_duration = get_tutor_course_duration_context($course_id);
                                                        if ($course_duration) {
                                                            // Strip HTML tags and display the duration
                                                            echo 'Duration: ' . esc_html(wp_strip_all_tags($course_duration));
                                                        } else {
                                                            echo 'Duration: Not available';
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="price-tl">
                                                <p>
                                                    <?php
                                                        $course_price = trim(preg_replace('/\s+/', ' ', $course_price));
                                                        preg_match_all('/₹[\d,\.]+/', $course_price, $matches);

                                                        if (!empty($matches[0])) {
                                                            foreach ($matches[0] as $price) {
                                                                echo '<span class="cr-price1">' . esc_html($price) . '</span>';
                                                            }
                                                        } else {
                                                            echo '<span class="cr-price2">' . esc_html($course_price) . '</span>';
                                                        }
                                                    ?>
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="know-more">Know More</a>
                                            </div>      
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No courses found.</p>';
                            }
                        } else {
                            echo '<p>Error: Tutor LMS plugin is not activated or available.</p>';
                        }
                    ?>
                </div> 
                <div class="controls">
                    <p class="page-number"><span class="current-slide"><strong>01</strong></span>/<span class="total-slides">00</span></p>
                    <div class="arrows-btn">
                        <button class="custom-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-tl" alt=""></button>
                        <button class="custom-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-tl" alt=""></button>
                    </div>
                </div>
            </div>
            <div id="four" class="content">
                <div class="foundation-carousel owl-carousel owl-theme">
                    <?php
                        // Check if Tutor LMS functions are available
                        if (function_exists('tutor_utils')) {
                            $course_category_slug = 'skill-up-courses';
                            // Define the Tutor LMS course query
                            $args = array(
                                'post_type' => 'courses', // Your custom post type
                                'posts_per_page' => 6,    // Adjust the number of courses as needed
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'course-category', // Tutor LMS course category taxonomy
                                        'field' => 'slug',               // Use 'slug' or 'term_id'
                                        'terms' => $course_category_slug, // Replace with the desired category slug
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);

                            // Check if any courses are found
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    
                                    // Safely fetch course price and duration
                                    $course_id = get_the_ID();
                                    $course_price = 'Free';  // Default to Free
                                    $course_duration = 'N/A';

                                    // Fetch the course price and clean the output
                                    if (tutor_utils()->is_course_purchasable()) {
                                        $raw_price = tutor_utils()->get_course_price();
                                        $course_price = wp_strip_all_tags($raw_price); // Clean HTML tags from the price
                                    }

                                    // Fetch the course duration
                                    $duration_meta = get_post_meta($course_id, '_tutor_course_duration', true);
                                    if (!empty($duration_meta)) {
                                        $course_duration = $duration_meta;
                                    }
                                    ?>
                                    <div class="item">
                                        <div class="cardd-tl active-card">
                                            <div class="card-tl-img">
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="frame-tl" alt="<?php the_title(); ?>">
                                                <?php } else { ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Frame-40095.png'); ?>" class="frame-tl" alt="Default Image">
                                                <?php } ?>
                                                <div class="cr-reviews">
                                                <?php
                                                    // Get the course rating details
                                                    $rating = tutor_utils()->get_course_rating(get_the_ID());

                                                    if ($rating && isset($rating->rating_avg)) {
                                                        // Display the star rating and average rating
                                                        $average_rating = number_format($rating->rating_avg, 1); // Format to one decimal place
                                                        $total_reviews = $rating->rating_count; // Total number of reviews

                                                        // Display the star image and average rating
                                                        echo '<span class="star-image"><img src="' . esc_url(get_template_directory_uri() . '/assets/images/star-fill.svg') . '" alt="Star Image"></span> ' . esc_html($average_rating);
                                                        // Uncomment the next line to display the number of reviews
                                                        // echo ' (' . esc_html($total_reviews) . ' reviews)';
                                                    } else {
                                                        echo '<span class="no-reviews">No reviews yet</span>';
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="card-tl-content">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <p class="master"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                <span class="duration-weeks">
                                                    <?php  
                                                        $course_duration = get_tutor_course_duration_context($course_id);
                                                        if ($course_duration) {
                                                            // Strip HTML tags and display the duration
                                                            echo 'Duration: ' . esc_html(wp_strip_all_tags($course_duration));
                                                        } else {
                                                            echo 'Duration: Not available';
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="price-tl">
                                                <p>
                                                    <?php
                                                        $course_price = trim(preg_replace('/\s+/', ' ', $course_price));
                                                        preg_match_all('/₹[\d,\.]+/', $course_price, $matches);

                                                        if (!empty($matches[0])) {
                                                            foreach ($matches[0] as $price) {
                                                                echo '<span class="cr-price1">' . esc_html($price) . '</span>';
                                                            }
                                                        } else {
                                                            echo '<span class="cr-price2">' . esc_html($course_price) . '</span>';
                                                        }
                                                    ?>
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="know-more">Know More</a>
                                            </div>      
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No courses found.</p>';
                            }
                        } else {
                            echo '<p>Error: Tutor LMS plugin is not activated or available.</p>';
                        }
                    ?>
                </div> 
                <div class="controls">
                    <p class="page-number"><span class="current-slide"><strong>01</strong></span>/<span class="total-slides">00</span></p>
                    <div class="arrows-btn">
                        <button class="custom-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-tl" alt=""></button>
                        <button class="custom-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-tl" alt=""></button>
                    </div>
                </div>
            </div>
            <div id="five" class="content">
                <div class="foundation-carousel owl-carousel owl-theme">
                    <?php
                        // Check if Tutor LMS functions are available
                        if (function_exists('tutor_utils')) {
                            $course_category_slug = 'ielts-academic';
                            // Define the Tutor LMS course query
                            $args = array(
                                'post_type' => 'courses', // Your custom post type
                                'posts_per_page' => 6,    // Adjust the number of courses as needed
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'course-category', // Tutor LMS course category taxonomy
                                        'field' => 'slug',               // Use 'slug' or 'term_id'
                                        'terms' => $course_category_slug, // Replace with the desired category slug
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);

                            // Check if any courses are found
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    
                                    // Safely fetch course price and duration
                                    $course_id = get_the_ID();
                                    $course_price = 'Free';  // Default to Free
                                    $course_duration = 'N/A';

                                    // Fetch the course price and clean the output
                                    if (tutor_utils()->is_course_purchasable()) {
                                        $raw_price = tutor_utils()->get_course_price();
                                        $course_price = wp_strip_all_tags($raw_price); // Clean HTML tags from the price
                                    }

                                    // Fetch the course duration
                                    $duration_meta = get_post_meta($course_id, '_tutor_course_duration', true);
                                    if (!empty($duration_meta)) {
                                        $course_duration = $duration_meta;
                                    }
                                    ?>
                                    <div class="item">
                                        <div class="cardd-tl active-card">
                                            <div class="card-tl-img">
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="frame-tl" alt="<?php the_title(); ?>">
                                                <?php } else { ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Frame-40095.png'); ?>" class="frame-tl" alt="Default Image">
                                                <?php } ?>
                                                <div class="cr-reviews">
                                                <?php
                                                    // Get the course rating details
                                                    $rating = tutor_utils()->get_course_rating(get_the_ID());

                                                    if ($rating && isset($rating->rating_avg)) {
                                                        // Display the star rating and average rating
                                                        $average_rating = number_format($rating->rating_avg, 1); // Format to one decimal place
                                                        $total_reviews = $rating->rating_count; // Total number of reviews

                                                        // Display the star image and average rating
                                                        echo '<span class="star-image"><img src="' . esc_url(get_template_directory_uri() . '/assets/images/star-fill.svg') . '" alt="Star Image"></span> ' . esc_html($average_rating);
                                                        // Uncomment the next line to display the number of reviews
                                                        // echo ' (' . esc_html($total_reviews) . ' reviews)';
                                                    } else {
                                                        echo '<span class="no-reviews">No reviews yet</span>';
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="card-tl-content">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <p class="master"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                <span class="duration-weeks">
                                                    <?php  
                                                        $course_duration = get_tutor_course_duration_context($course_id);
                                                        if ($course_duration) {
                                                            // Strip HTML tags and display the duration
                                                            echo 'Duration: ' . esc_html(wp_strip_all_tags($course_duration));
                                                        } else {
                                                            echo 'Duration: Not available';
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="price-tl">
                                                <p>
                                                    <?php
                                                        $course_price = trim(preg_replace('/\s+/', ' ', $course_price));
                                                        preg_match_all('/₹[\d,\.]+/', $course_price, $matches);

                                                        if (!empty($matches[0])) {
                                                            foreach ($matches[0] as $price) {
                                                                echo '<span class="cr-price1">' . esc_html($price) . '</span>';
                                                            }
                                                        } else {
                                                            echo '<span class="cr-price2">' . esc_html($course_price) . '</span>';
                                                        }
                                                    ?>
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="know-more">Know More</a>
                                            </div>      
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No courses found.</p>';
                            }
                        } else {
                            echo '<p>Error: Tutor LMS plugin is not activated or available.</p>';
                        }
                    ?>
                </div> 
                <div class="controls">
                    <p class="page-number"><span class="current-slide"><strong>01</strong></span>/<span class="total-slides">00</span></p>
                    <div class="arrows-btn">
                        <button class="custom-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-tl" alt=""></button>
                        <button class="custom-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-tl" alt=""></button>
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
                        <button id="prev-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow-1.svg" class="left-test-tl" alt=""></button>
                        <button id="next-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" class="right-test-tl" alt=""></button>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.svg" alt="">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.svg" alt="">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.svg" alt="">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.svg" alt="">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.svg" alt="">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
                            </div>
                            <p class="faq-answer" style="display: block;"><?php the_field('faq_text1'); ?></p>
                        </div>
                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading2'); ?></h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text2'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading3'); ?></h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text3'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading4'); ?></h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text4'); ?></p>
                        </div>
                    </div>
                    <div class="faq-cards-2">
                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading5'); ?></h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text5'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading6'); ?></h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text6'); ?></p>
                        </div>

                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading7'); ?></h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
                            </div>
                            <p class="faq-answer" style="display: none;"><?php the_field('faq_text7'); ?></p>
                        </div>
                        <div class="faq-card-content">
                            <div class="faq-card-tl" onclick="toggleFAQ(this)">
                                <h4><?php the_field('faq_heading8'); ?></h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon.svg" class="plus-icon" alt="">
                                <svg version="1.1" id="fi_43625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.805px" height="121.804px" viewBox="0 0 121.805 121.804" style="enable-background:new 0 0 121.805 121.804;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308
                                    C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z"></path>
                            </g>
                        </g>
                        </svg>
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