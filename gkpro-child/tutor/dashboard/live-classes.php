<?php
/**
 * Student “Live Classes” tab template
 */
defined( 'ABSPATH' ) || exit;

use TutorPro\GoogleMeet\Models\EventsModel;

$user_id = get_current_user_id();
if ( ! $user_id ) {
    echo '<p>Please <a href="' . wp_login_url() . '">log in</a> to see your live classes.</p>';
    return;
}

// 1) Get all enrolled courses
$enrolled = tutor_utils()->get_enrolled_courses_by_user( $user_id );
if ( ! ( $enrolled && $enrolled->have_posts() ) ) {
    echo '<p>You are not enrolled in any courses.</p>';
    return;
}

// 2) Pull in “active” sessions for each course
$all_sessions = [];
$paging_args  = [ 'limit' => 50, 'offset' => 0 ];

while ( $enrolled->have_posts() ) {
    $enrolled->the_post();
    $course_id = get_the_ID();

    $sorting_args = [
        'course_id'   => $course_id,
        'search_term' => '',
        'author_id'   => '',
        'date'        => '',
    ];

    $data = EventsModel::get( 'active', $sorting_args, $paging_args );
    if ( ! empty( $data['meetings'] ) ) {
        $all_sessions = array_merge( $all_sessions, $data['meetings'] );
    }
}
wp_reset_postdata();

// 3) Helper to decide status/labels/buttons
function get_session_status( $meta ) {
    $now     = current_time( 'timestamp' );
    $start   = strtotime( $meta->start_datetime );
    $end     = strtotime( $meta->end_datetime );
    $expired = ( $now > $end );

    if ( $now >= $start && $now <= $end ) {
        return [
            'slug'      => 'live',
            'label'     => 'Live',
            'btn_label' => 'Join Now',
            'disabled'  => false,
        ];
    }
    if ( $expired ) {
        return [
            'slug'      => 'finished',
            'label'     => 'Finished',
            'btn_label' => 'Watch Now',
            'disabled'  => false,
        ];
    }
    return [
        'slug'      => 'upcoming',
        'label'     => 'Upcoming',
        'btn_label' => 'Join Now',
        'disabled'  => true,
    ];
}
?>

<div class="live-class-list tutor-dashboard-content-inner">
  <h2>Live Sessions</h2>

  <?php if ( empty( $all_sessions ) ) : ?>
    <p>No upcoming live classes found.</p>
  <?php else : ?>
    <?php foreach ( $all_sessions as $meeting ) :
      // decode the JSON details to access start/end
      $details     = json_decode( $meeting->event_details );
      $status_info = get_session_status( $details );
      $start_label = date_i18n( 'jS M, g:ia', strtotime( $details->start_datetime ) );
    ?>
      <div class="live-class-card <?php echo esc_attr( $status_info['slug'] ); ?>">
        <div class="class-icon">
          <?php
            if ( $status_info['slug'] === 'live' )   echo '🟢';
            if ( $status_info['slug'] === 'finished') echo '✅';
            if ( $status_info['slug'] === 'upcoming') echo '⏰';
          ?>
        </div>
        <div class="class-info">
          <h3><?php echo esc_html( $meeting->post_title ); ?></h3>
          <p>Live Class: <strong><?php echo esc_html( $start_label ); ?></strong></p>
        </div>
        <div class="class-status">
          <span class="status-tag <?php echo esc_attr( $status_info['slug'] ); ?>">
            <?php echo esc_html( $status_info['label'] ); ?>
          </span>
          <?php if ( ! $status_info['disabled'] ) : ?>
            <a href="<?php echo esc_url( $details->meet_link ); ?>" target="_blank"
               class="action-btn <?php echo esc_attr( $status_info['slug'] ); ?>">
              <?php echo esc_html( $status_info['btn_label'] ); ?>
            </a>
          <?php else : ?>
            <button class="action-btn <?php echo esc_attr( $status_info['slug'] ); ?>" disabled>
              <?php echo esc_html( $status_info['btn_label'] ); ?>
            </button>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<style>
    /* .live-class-list { max-width: 900px; margin: auto; } */
.live-class-card {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #fff;
  border-radius: 12px;
  padding: 16px;
  margin-bottom: 12px;
  box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}
.class-icon { font-size: 24px; flex-shrink:0; }
.class-info { flex-grow:1; padding: 0 16px; }
.class-info h3 { margin: 0 0 4px; font-size:18px; }
.class-info p { margin:0; color:#666; font-size:14px; }
.class-status { text-align:right; }
.status-tag {
  display:inline-block;
  padding:4px 10px;
  border-radius:6px;
  font-size:13px;
  font-weight:600;
  margin-bottom:6px;
}
.status-tag.live     { background:#3B82F6; color:#fff; }
.status-tag.finished { background:#10B981; color:#fff; }
.status-tag.upcoming { background:#F97316; color:#fff; }
.action-btn {
  padding:6px 14px;
  border:none;
  border-radius:6px;
  font-weight:600;
  cursor:pointer;
  margin-left:10px;
}
.action-btn.live     { background:#DC2626; color:#fff; }
.action-btn.finished { background:#E5E7EB; color:#444; }
.action-btn.upcoming { background:#D1D5DB; color:#777; cursor:not-allowed; }

</style>