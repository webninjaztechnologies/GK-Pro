<?php
// Get Courses
$args = array(
    'post_type' => 'courses', // or 'course' depending on CPT slug
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <div class="course-grid">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="course-card">
                <h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                
                <div class="course-meta">
                    <?php
                    $duration = get_post_meta(get_the_ID(), '_tutor_course_duration', true);
                    $max_students = get_post_meta(get_the_ID(), '_tutor_max_students', true);
                    ?>
                    <span><?php echo $duration ? $duration . ' Min' : ''; ?></span>
                    <span>Max Students: <?php echo $max_students ?: 'Unlimited'; ?></span>
                </div>
                
                <a href="<?php the_permalink(); ?>" class="start-button">Start Test →</a>
            </div>
        <?php endwhile; ?>
    </div>
<?php
endif;
wp_reset_postdata();
?>
