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

    echo '<h2 class="tutor-fs-4 tutor-fw-medium tutor-mb-24">' . esc_html( $course_title ) . '</h2>';

    global $post;
    $orig_post = $post;
    $post      = get_post( $course_id );
    setup_postdata( $post );

    $course_nav_item = tutor_utils()->course_nav_items();

    echo '<div class="tutor-tab">';
    foreach ( $course_nav_item as $key => $subpage ) {
        $active = $key === 'info' ? ' is-active' : '';
        echo '<div id="tutor-course-details-tab-' . esc_attr( $key ) . '" class="tutor-tab-item cust-tutor-tabs-it' . $active . '">';

        do_action( 'tutor_course/single/tab/' . $key . '/before' );

        $method = $subpage['method'];
        if ( is_string( $method ) ) {
            call_user_func( $method );
        } else {
            call_user_func_array( [ $method[0], $method[1] ], [ $course_id ] );
        }

        do_action( 'tutor_course/single/tab/' . $key . '/after' );

        echo '</div>';
    }
    echo '</div>';
    $post = $orig_post;
    setup_postdata( $post );
}

wp_reset_postdata();

echo '</div>'; 
