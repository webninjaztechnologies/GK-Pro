<?php
/**
 * Template for course archive filter
 *
 * @package Tutor\Templates
 * @subpackage Course_Filter
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 1.4.3
 */

if ( ! tutor_utils()->get_option( 'course_archive_filter_sorting', true, true, true ) ) {
	return;
}

$sort_by = \TUTOR\Input::get( 'course_order', '' );
?>

<!--
	Note: Do not remove tutor-course-filter attr. It required by _archive.js for filter function.
!-->
<div style="text-align: right;" class="tutor-course-filter course-filter-main" tutor-course-filter>
	<div class="course-count">
		<?php $total_courses = wp_count_posts('courses')->publish;
		echo 'We have found ' . $total_courses . ' courses for you.';
		?>
	</div>
	<form style="display: inline-block;">
		<select class="tutor-form-control tutor-form-select" name="course_order">
			<option value="newest_first" <?php selected( 'newest_first', $sort_by ); ?> >
				<?php esc_html_e( 'Release Date (newest first)', 'tutor' ); ?>
			</option>
			<option value="oldest_first" <?php selected( 'oldest_first', $sort_by ); ?>>
				<?php esc_html_e( 'Release Date (oldest first)', 'tutor' ); ?>
			</option>
			<option value="course_title_az" <?php selected( 'course_title_az', $sort_by ); ?>>
				<?php esc_html_e( 'Course Title (a-z)', 'tutor' ); ?>
			</option>
			<option value="course_title_za" <?php selected( 'course_title_za', $sort_by ); ?>>
				<?php esc_html_e( 'Course Title (z-a)', 'tutor' ); ?>
			</option>
		</select>
	</form>
</div>
<br/>
