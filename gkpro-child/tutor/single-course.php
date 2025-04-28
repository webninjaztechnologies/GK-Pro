<?php
/**
 * Template for displaying single course
 *
 * @package Tutor\Templates
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 1.0.0
 */
global $is_enrolled;

$course_id     = get_the_ID();
$course_rating = tutor_utils()->get_course_rating( $course_id );
$is_enrolled   = tutor_utils()->is_enrolled( $course_id, get_current_user_id() );
$total_enrolled = tutor_utils()->count_enrolled_users_by_course($course_id);

// Max student limit (from course settings — if enabled)
$total_enrolled = tutor_utils()->count_enrolled_users_by_course($course_id);

// Get max students
$max_students = (int) get_post_meta($course_id, '_tutor_course_max_students', true);
$max_students_display = $max_students > 0 ? $max_students : '∞';
// Prepare the nav items.
$course_nav_item = apply_filters( 'tutor_course/single/nav_items', tutor_utils()->course_nav_items(), $course_id );
$is_public       = \TUTOR\Course_List::is_public( $course_id );
$is_mobile       = wp_is_mobile();

$enrollment_box_position = tutor_utils()->get_option( 'enrollment_box_position_in_mobile', 'bottom' );
if ( '-1' === $enrollment_box_position ) {
	$enrollment_box_position = 'bottom';
}
$student_must_login_to_view_course = tutor_utils()->get_option( 'student_must_login_to_view_course' );

tutor_utils()->tutor_custom_header();

if ( ! is_user_logged_in() && ! $is_public && $student_must_login_to_view_course ) {
	tutor_load_template( 'login' );
	tutor_utils()->tutor_custom_footer();
	return;
}
$has_video = apply_filters( 'tutor_course_has_video', tutor_utils()->has_video_in_single(), $course_id );

?>
<section class="course-detail-banner">
            <div class="container">
                <div class="course-detail-content">
                    <div class="cdet-cont">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 50); ?></p>
                        <div class="cdet-review">
						<?php if ( ! $disable_reviews ) : ?>
							<div class="tutor-course-details-ratings">
								<?php
									tutor_utils()->star_rating_generator_v2( $course_rating->rating_avg, $course_rating->rating_count, true );
								?>
							</div>
						<?php endif; ?>
                        </div>
                        <!-- <h2>Students Enrolled (24/120)</h2> -->
                    </div>
                </div>
            </div>
        </section>
		<section class="courdet-body-sec">
            <div class="container">
<?php do_action( 'tutor_course/single/before/wrap' ); ?>
<div <?php tutor_post_class( 'tutor-full-width-course-top tutor-course-top-info tutor-page-wrap tutor-wrap-parent' ); ?>>
	<div class="tutor-course-details-page tutor-container">
		<?php ( isset( $is_enrolled ) && $is_enrolled ) ? tutor_course_enrolled_lead_info() : tutor_course_lead_info(); ?>
		<div class="tutor-row tutor-gx-xl-5">
			<main class="tutor-col-xl-8">
				<?php $has_video ? tutor_course_video() : get_tutor_course_thumbnail(); ?>
				<?php do_action( 'tutor_course/single/before/inner-wrap' ); ?>

				<?php if ( $is_mobile && 'top' === $enrollment_box_position ) : ?>
					<div class="tutor-mt-32">
						<?php tutor_load_template( 'single.course.course-entry-box' ); ?>
					</div>
				<?php endif; ?>

				<div class="tutor-course-details-tab course-detail-cus-tabs">
					<?php if ( is_array( $course_nav_item ) && count( $course_nav_item ) > 1 ) : ?>
						<div class="tutor-is-sticky">
							<?php tutor_load_template( 'single.course.enrolled.nav', array( 'course_nav_item' => $course_nav_item ) ); ?>
						</div>
					<?php endif; ?>
					<div class="tutor-tab">
						<?php foreach ( $course_nav_item as $key => $subpage ) : ?>
							<div id="tutor-course-details-tab-<?php echo esc_attr( $key ); ?>" class="tutor-tab-item<?php echo 'info' == $key ? ' is-active' : ''; ?>">
								<?php
									do_action( 'tutor_course/single/tab/' . $key . '/before' );

									$method = $subpage['method'];
								if ( is_string( $method ) ) {
									$method();
								} else {
									$_object = $method[0];
									$_method = $method[1];
									$_object->$_method( get_the_ID() );
								}

									do_action( 'tutor_course/single/tab/' . $key . '/after' );
								?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="tutor-mt-24 tutor-course-details-content<?php echo $has_show_more ? ' tutor-toggle-more-content tutor-toggle-more-collapsed' : ''; ?>"<?php echo $has_show_more ? ' data-tutor-toggle-more-content data-toggle-height="200" style="height: 200px;"' : ''; ?>>
					<div class="tutor-fs-6 tutor-color-secondary">
						<?php echo the_content(); ?>
					</div>
				</div>
				<?php do_action( 'tutor_course/single/after/inner-wrap' ); ?>
			</main>

			<aside class="tutor-col-xl-4">
				<?php $sidebar_attr = apply_filters( 'tutor_course_details_sidebar_attr', '' ); ?>
				<div class="tutor-single-course-sidebar tutor-mt-40 tutor-mt-xl-0" <?php echo esc_attr( $sidebar_attr ); ?> >
					<?php do_action( 'tutor_course/single/before/sidebar' ); ?>

					<?php if ( ( $is_mobile && 'bottom' === $enrollment_box_position ) || ! $is_mobile ) : ?>
						<?php tutor_load_template( 'single.course.course-entry-box' ); ?>
					<?php endif ?>

					<div class="tutor-single-course-sidebar-more tutor-mt-24">
						<?php tutor_course_instructors_html(); ?>
						<?php tutor_course_requirements_html(); ?>
						<?php tutor_course_tags_html(); ?>
						<?php tutor_course_target_audience_html(); ?>
					</div>

					<?php do_action( 'tutor_course/single/after/sidebar' ); ?>
				</div>
			</aside>
		</div>
	</div>
</div>



<?php do_action( 'tutor_course/single/after/wrap' ); ?>
					</div>
					</section>
<?php
tutor_utils()->tutor_custom_footer();
