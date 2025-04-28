<?php
/* Template Name: Tutor LMS Course List */
get_header(); 
?>

        <section class="our-courses-banner">
            <div class="container">
                <div class="our-course-content">
                    <h1>our courses</h1>
                    <div class="banner-img">
            
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/our-course-banner.png" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="our-course-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="course-filter">
                            <h3>Filter by Category</h3>
                            <!-- <label>Filter by Category</label> -->
                            <?php
                            // Display course categories
                            $terms = get_terms(array(
                                'taxonomy' => 'course-category',
                                'hide_empty' => false,
                            ));

                            foreach ($terms as $term) {
                                echo '<label><input type="checkbox" class="course-filter-checkbox" value="' . esc_attr($term->term_id) . '"> ' . esc_html($term->name) . '</label>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="course-grid-header">
                            <p>We have found 5 courses for you</p>
                            <select>
                                <option>Sort By (Default)</option>
                                <option>abc</option>
                                <option>def</option>
                                <option>ghi</option>
                              </select>
                        </div>
                        <div class="row">
                            <?php
                            $args = array(
                                'post_type' => 'courses',
                                'posts_per_page' => -1, // You can change to limit number of courses
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();

                                    // Tutor LMS meta
                                    $course_duration = get_post_meta(get_the_ID(), '_tutor_course_duration', true);
                                    $course_price = tutor_utils()->get_course_price(get_the_ID());
                                    $course_rating = tutor_utils()->get_course_rating(get_the_ID())->rating;

                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="course-grid">
                                            <div class="course-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('medium'); ?>
                                                </a>
                                                <div class="rev-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star-fill.svg" alt=""> 
                                                    <?php echo esc_html($course_rating); ?>
                                                </div>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="course-title"><?php the_title(); ?></a>
                                            <p class="course-duration">Duration: <span><?php echo esc_html($course_duration ?: 'N/A'); ?></span></p>
                                            <div class="course-modules">
                                                <div class="cmdiv">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/module.svg" alt=""> 
                                                    <?php echo tutor_utils()->get_lesson_count_by_course(get_the_ID()); ?> Modules
                                                </div>
                                                <div class="cmdiv">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Video.svg" alt=""> 
                                                    <?php echo tutor_utils()->get_video_count_by_course(get_the_ID()); ?> Videos
                                                </div>
                                            </div>
                                            <div class="course-price">
                                                <h4><?php echo $course_price ? wc_price($course_price) : 'Free'; ?></h4>
                                                <a href="<?php the_permalink(); ?>">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>No courses found.</p>';
                            endif;
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
