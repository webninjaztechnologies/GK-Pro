<?php
/**
 * Student Dashboard → Course Content
 */

if ( ! is_user_logged_in() || ! current_user_can( 'tutor_student' ) ) {
    echo '<p>You must be logged in as a student to view this content.</p>';
    return;
}

$user_id   = get_current_user_id();
$enrolled  = tutor_utils()->get_enrolled_courses_by_user( $user_id );

if ( ! $enrolled->have_posts() ) {
    echo '<p>You are not enrolled in any courses.</p>';
    return;
}

echo '<div class="ds-con-tab tutor-dashboard-course-content tutor-mt-32">';

while ( $enrolled->have_posts() ) {
    $enrolled->the_post();
    $course_id    = get_the_ID();
    $course_title = get_the_title();

    // 1) Course Heading
    // echo '<h2 class="tutor-fs-4 tutor-fw-medium tutor-mb-24">' . esc_html( $course_title ) . '</h2>';

    // 2) Temporarily hijack global $post so that all Tutor functions
    //    (course_nav_items, tutor_load_template...) think we're on a course page.
    global $post;
    $orig_post = $post;
    $post      = get_post( $course_id );
    setup_postdata( $post );

    // 3) Fetch the same nav items array that single-course uses:
    $course_nav_item = tutor_utils()->course_nav_items();

    // 4) Render the little sticky tab bar (if there’s more than one tab)
    // if ( is_array( $course_nav_item ) && count( $course_nav_item ) > 1 ) {
    //     echo '<div class="tutor-is-sticky tutor-mb-24">';
    //     tutor_load_template( 'single.course.enrolled.nav', [ 'course_nav_item' => $course_nav_item ] );
    //     echo '</div>';
    // }

    // 5) Loop through each tab exactly as the single-course template does:
    echo '<div class="tutor-tab">';
    foreach ( $course_nav_item as $key => $subpage ) {
        // mark the “info” tab active by default
        $active = $key === 'info' ? ' is-active' : '';
        echo '<div id="tutor-course-details-tab-' . esc_attr( $key ) . '" class="tutor-tab-item' . $active . '">';

        // before hook
        do_action( 'tutor_course/single/tab/' . $key . '/before' );

        // call the tab’s method
        $method = $subpage['method'];
        if ( is_string( $method ) ) {
            call_user_func( $method );
        } else {
            call_user_func_array( [ $method[0], $method[1] ], [ $course_id ] );
        }

        // after hook
        do_action( 'tutor_course/single/tab/' . $key . '/after' );

        echo '</div>';
    }
    echo '</div>';

    // 6) restore the original global $post
    $post = $orig_post;
    setup_postdata( $post );
}

wp_reset_postdata();

echo '</div>';  // .tutor-dashboard-course-content
