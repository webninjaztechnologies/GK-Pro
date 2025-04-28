<?php
/**
 * Display loop thumbnail
 *
 * @package Tutor\Templates
 * @subpackage CourseLoopPart
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 1.4.3
 */

$tutor_course_img = get_tutor_course_thumbnail_src();
?>
<div class="tutor-course-thumbnail">
	<a href="<?php the_permalink(); ?>" class="tutor-d-block">
		<div class="tutor-ratio tutor-ratio-16x9">
			<img class="tutor-card-image-top" src="<?php echo esc_url( $tutor_course_img ); ?>" alt="<?php the_title(); ?>" loading="lazy">
		</div>
	</a>
	<?php do_action( 'tutor_after_course_loop_thumbnail_link', get_the_ID() ); ?>
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
