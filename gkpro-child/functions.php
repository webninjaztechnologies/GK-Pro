<?php
// Enqueue custom css
function enqueue_custom_css1(){
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com', array(), '1.0.0', 'all');
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap', array(), '1.0.0', 'all');
    wp_enqueue_style('fonts1', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@100..900&display=swap', array(), '1.0.0', 'all');
    wp_enqueue_style('fonts2', 'https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap', array(), '1.0.0', 'all');
    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', array(), '2.3.4', 'all');
    wp_enqueue_style('owl-carousel-style-min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4', 'all');

    if (is_page('contact-us')) {
        wp_enqueue_style('contact-us', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.0.0', 'all');
    }
    if (is_page('about-us')) {
        wp_enqueue_style('about-us', get_template_directory_uri() . '/assets/css/about.css', array(), '1.0.0', 'all');
    }
    if (is_page('our-courses')) {
        wp_enqueue_style('our-courses-style', get_template_directory_uri() . '/assets/css/our-courses.css', array(), '1.0.0', 'all');
    }
    if (is_page('our-courses') || is_post_type_archive('courses')) {
        wp_enqueue_style('our-courses', get_template_directory_uri() . '/assets/css/our-courses.css', array(), '1.0.0', 'all');
    }
    if (is_singular('courses')) {
        wp_enqueue_style('course-detail', get_template_directory_uri() . '/assets/css/course-detail.css', array(), '1.0.0', 'all');
    }
    if (is_page('login') || is_page('dashboard') || is_page('retrieve-password')) {
        wp_enqueue_style('registration', get_template_directory_uri() . '/assets/css/login.css', array(), '1.0.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_css1');

// Enqueue custom JS
function enqueue_custom_script1(){
    wp_enqueue_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('global-script', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), null, true);
    wp_localize_script('global-script', 'localize_data', array(
        'site_url' => get_site_url()
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script1');


// Function to display the footer logo
function the_footer_logo1() {
    $footer_logo_url = get_theme_mod('custom_footer_image');
    if ($footer_logo_url) {
        echo '<a href="/"><img src="' . esc_url($footer_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '"></a>';
    }
}


// theme setup code
function theme_setup1()
{
    // Theme logo support setting
    // add_theme_support('custom-logo');
    add_theme_support('editor-styles');
    add_theme_support('title-tag');
    // Desktop menu
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    )
    );


 // Theme menus support setting
    // Enable menu support
    add_theme_support('menus');

    // Register menus
    register_nav_menus(
        array(
            'desktop-menu'  => __('Desktop Menu', 'theme'),
            'mobile-menu' => __('Mobile Menu', 'theme'),
            'footer-menu1' => __('Quick Links', 'theme'),
            'footer-menu2' => __('Courses Menu', 'theme'),
        )
    );
}
add_action('after_setup_theme', 'theme_setup1');



// allow svg
function allow_svg_upload1($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload1');


function footer_customizer_settings1($wp_customize) {

        // Add Section for IELTS Text
        $wp_customize->add_section('ielts_text_section', array(
            'title'    => __('IELTS Text', 'textdomain'),
            'priority' => 30, // Set the priority where you want it to appear
        ));
    
        // Add Setting for IELTS Text
        $wp_customize->add_setting('ielts_text', array(
            'default'           => 'Achieve your dreams with GK PRO Academy, a trusted platform for IELTS preparation. We combine expert guidance, innovative tools, and flexible learning options to help students worldwide excel in their IELTS exams.',
            'sanitize_callback' => 'sanitize_text_field', // Sanitization function for the text field
        ));
    
        // Add Control for the IELTS Text
        $wp_customize->add_control('ielts_text', array(
            'label'   => __('IELTS Text', 'textdomain'), // Label for the field
            'section' => 'ielts_text_section',           // Section to add it to
            'type'    => 'textarea',                     // You can use 'textarea' for multi-line input
        ));
    // Address
    $wp_customize->add_setting('footer_address', array(
        'default' => '25055 Arthur RoadEscalon, California 95320, US',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_address', array(
        // 'label' => __('Footer Address', 'textdomain'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('footer_email', array(
        'default' => 'walnuts@deruosinut.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('footer_email', array(
        'label' => __('Footer Email', 'textdomain'),
        'section' => 'title_tagline',
        'type' => 'email',
    ));

    // Phone
    $wp_customize->add_setting('footer_phone', array(
        'default' => '(209) 838-8307',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_phone', array(
        'label' => __('Footer Phone', 'textdomain'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));
}
add_action('customize_register', 'footer_customizer_settings1');

function footer_social_settings1($wp_customize) {
    // Copyright Text
    $wp_customize->add_setting('footer_copyright_text', array(
        'default' => 'Copyright © ' . date('Y') . ' GKPro Academy',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_copyright_text', array(
        'label' => __('Footer Copyright Text', 'textdomain'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // Social Media Links
    $social_links = ['instagram', 'youtube', 'twitter'];
    foreach ($social_links as $social) {
        $wp_customize->add_setting("footer_{$social}_link", array(
            'default' => '#',
            'sanitize_callback' => 'esc_url',
        ));
        $wp_customize->add_control("footer_{$social}_link", array(
            'label' => sprintf(__('Footer %s Link', 'textdomain'), ucfirst($social)),
            'section' => 'title_tagline',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'footer_social_settings1');

// add_action('template_redirect', function() {
//     if (trim($_SERVER['REQUEST_URI'], '/') === 'dashboard/retrieve-password') {
//         wp_redirect(home_url('/retrieve-password/'));
//         exit;
//     }
// });
// Shortcode to display courses in custom layout
// 


function custom_theme_customize_register( $wp_customize ) {

    // Section
    $wp_customize->add_section( 'custom_image_section', array(
        'title'       => __( 'Dashboard Logo', 'gk-pro' ),
        'priority'    => 30,
    ) );

    // Setting
    $wp_customize->add_setting( 'custom_image_setting', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    // Control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_image_control', array(
        'label'    => __( 'Upload an Image', 'gk-pro' ),
        'section'  => 'custom_image_section',
        'settings' => 'custom_image_setting',
    ) ) );
}
add_action( 'customize_register', 'custom_theme_customize_register' );

// add_filter('tutor_dashboard/nav_items', 'add_custom_dashboard_link', 11);
// function add_custom_dashboard_link($links) {
//     $custom_link = [
//         'custom_link' => [
//             "title" => __('Course Content', 'tutor'),
//             "url" => "https://your-specific-page-url.com",
//             "icon" => "tutor-icon-calender-line",
//         ]
//     ];
//     return array_slice($links, 0, 1, true) + $custom_link + array_slice($links, 1, null, true);
// }


// add_filter('tutor_dashboard/nav_items', 'add_custom_dashboard_link', 11);
// function add_custom_dashboard_link($links) {
// $custom_link = [
// 'custom_link' => [
// "title" => __('Custom Link', 'tutor'),
// "url" => get_permalink(get_user_meta(get_current_user_id(), 'custom_page_id', true)),
// "icon" => "tutor-icon-calender-line",
// ]
// ];
// return array_slice($links, 0, 1, true) + $custom_link + array_slice($links, 1, null, true);
// }

add_filter('tutor_dashboard/nav_items', 'remove_dashboard_links');
function remove_dashboard_links($links){
    // Remove specific links by uncommenting the lines below
    unset($links['reviews']);
    unset($links['wishlist']);
    return $links;
}

// add_filter('tutor_dashboard/nav_items', 'add_custom_dashboard_link');
// function add_custom_dashboard_link($links){
//   $links['live_classes'] = [
//     "title" => __('Live Classes', 'tutor'),
//     "url" => "live_classes",
//     "icon" => "tutor-icon-calender-line",
//   ];
//   return $links;
// }

// Add the Live Classes tab to dashboard navigation
add_filter('tutor_dashboard/nav_items', function($items) {
    $items['live-classes'] = [
        'title' => __('Live Classes', 'tutor'),
        'icon' => 'dashicons-video-alt3',
        'url' => tutor_utils()->get_tutor_dashboard_page_permalink('live-classes'),
        'order' => 99
    ];
    return $items;
});

// // Register the endpoint for proper routing
// add_filter('tutor_dashboard_endpoints', function($endpoints) {
//     $endpoints['live-classes'] = [
//         'title' => __('Live Classes', 'tutor'),
//         'auth_cap' => tutor()->student_role
//     ];
//     return $endpoints;
// });



// add_filter( 'tutor_dashboard/nav_items', 'add_live_classes_tab_to_student_dashboard' );

// function add_live_classes_tab_to_student_dashboard( $items ) {
//     $items['live-classes'] = array(
//         'title' => __( 'Live Classes', 'tutor-pro' ),
//         'icon'  => 'dashicons-video-alt2', // You can change the icon
//         'url'   => tutor_utils()->get_tutor_dashboard_page_permalink( 'live-classes' ),
//         'order' => 45, // Position in the sidebar
//     );

//     return $items;
// }

// add_filter( 'tutor_dashboard_tabs', 'add_live_classes_tab_for_students' );

// function add_live_classes_tab_for_students( $tabs ) {
//     // Only for students
//     if ( tutor_utils()->get_user_role( get_current_user_id() ) == 'student' ) {
//         $tabs['live_classes'] = [
//             'title' => __( 'Live Classes', 'tutor' ),
//             'url'   => '#',  // Add the URL to your custom live classes page
//             'icon'  => 'tutor-icon-timetable',  // Optional: You can change this icon
//         ];
//     }

//     return $tabs;
// }


// add_action( 'tutor_dashboard/live-classes', 'load_custom_live_classes_template' );

// function load_custom_live_classes_template() {
//     tutor_load_template( 'dashboard.live-classes' );
// }


// in your child‐theme’s functions.php

add_action( 'wp_enqueue_scripts', function(){
    if ( ! is_user_logged_in() ) return; // Ensure it's only for logged-in users
  
    // Set the base path for Tutor-Pro plugin assets
    $base = plugin_dir_url( WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php' ) . 'addons/calendar/assets/';
  
    // 1) Enqueue the JavaScript for the calendar
    wp_enqueue_script(
      'tutor-pro-calendar',
      $base . 'js/Calendar.js',
      [ 'react', 'react-dom' ], // React is already loaded by Tutor-Pro
      '3.4.2', // Use the version you're using
      true // Load in footer
    );
  
    // 2) Enqueue the CSS for the calendar
    wp_enqueue_style(
      'tutor-pro-calendar-css',
      $base . 'css/calendar.css',
      [],
      '3.4.2'
    );
  
    // 3) Localize the script with the necessary AJAX data
    wp_localize_script( 'tutor-pro-calendar', 'tutorCalendarData', [
      'ajax_url'    => admin_url( 'admin-ajax.php' ),
      'tutor_nonce' => wp_create_nonce( 'tutor_calendar' ),
    ] );
  });
  


  add_action( 'wp_enqueue_scripts', function(){
    if ( ! is_user_logged_in() ) return;
    $base = plugin_dir_url( WP_PLUGIN_DIR . '/tutor-pro/tutor-pro.php' ) . 'addons/calendar/assets/';
    wp_enqueue_script( 'tutor-pro-calendar', $base.'js/Calendar.js', ['react','react-dom'], '3.4.2', true );
    wp_enqueue_style(  'tutor-pro-calendar-css', $base.'css/calendar.css', [], '3.4.2' );
    wp_localize_script( 'tutor-pro-calendar', 'tutorCalendarData', [
      'ajax_url'    => admin_url('admin-ajax.php'),
      'tutor_nonce' => wp_create_nonce('tutor_calendar'),
    ]);
  });


//   course content tab

// // Add Course Content tab to Tutor LMS Dashboard
add_filter('tutor_dashboard/nav_items', function($items) {
    $items['course-content'] = [
        'title' => __('Course Content', 'tutor'),
        'icon' => 'dashicons-welcome-learn-more', // You can choose a different icon
        'url' => tutor_utils()->get_tutor_dashboard_page_permalink('course-content'),
        'order' => 10, // Change order as needed
    ];
    return $items;
});

// add_filter('tutor_dashboard/nav_items', function($items) {
//     if (current_user_can('tutor_student')) {
//         $items['course-content'] = [
//             'title' => __('Course Content', 'tutor'),
//             'icon' => 'dashicons-welcome-learn-more',
//             'url' => tutor_utils()->get_tutor_dashboard_page_permalink('course-content'),
//             'order' => 10,
//         ];
//     }
//     return $items;
// });
// add_filter('tutor_dashboard/template_path', function($template_path, $template, $slug) {
//     if ($slug === 'course-content') {
//         $custom_template = get_stylesheet_directory() . '/tutor/dashboard/course-content.php';
//         if (file_exists($custom_template)) {
//             return $custom_template;
//         }
//     }
//     return $template_path;
// }, 10, 3);
// 1. Add “Course Content” to the dashboard nav—*students only*
// add_filter( 'tutor_dashboard/nav_items', function( $items ) {
//     if ( current_user_can( 'tutor_student' ) ) {
//         $items['course-content'] = [
//             'title' => __( 'Course Content', 'tutor' ),
//             'icon'  => 'dashicons-welcome-learn-more',
//             'url'   => tutor_utils()->get_tutor_dashboard_page_permalink( 'course-content' ),
//             'order' => 20,
//         ];
//     }
//     return $items;
// });

// // 2. Register the endpoint so Tutor will route “/dashboard/course-content/” correctly
// add_filter( 'tutor_dashboard_endpoints', function( $endpoints ) {
//     $endpoints['course-content'] = [
//         'title'    => __( 'Course Content', 'tutor' ),
//         'auth_cap' => '',  // no extra capability required beyond the nav_items restriction
//     ];
//     return $endpoints;
// });

// // 3. Tell Tutor *which template* to load when someone hits that tab
// add_action( 'tutor_dashboard/content/course-content', function() {
//     $tpl = get_stylesheet_directory() . '/tutor/dashboard/course-content.php';
//     if ( file_exists( $tpl ) ) {
//         include $tpl;
//     } else {
//         echo '<p><strong>Template not found:</strong> ' . esc_html( $tpl ) . '</p>';
//     }
// });

// <?php
// 1) Add the “Course Content” menu item—students only
add_filter( 'tutor_dashboard/nav_items', function( $items ) {
    if ( current_user_can( 'tutor_student' ) ) {
        $items['course-content'] = [
            'title' => __( 'Course Content', 'tutor' ),
            'icon'  => 'dashicons-welcome-learn-more',
            'url'   => tutor_utils()->get_tutor_dashboard_page_permalink( 'course-content' ),
            'order' => 2,
        ];
    }
    return $items;
});

// 2) Register the endpoint so Tutor will route “/dashboard/course-content/”
add_filter( 'tutor_dashboard_endpoints', function( $endpoints ) {
    $endpoints['course-content'] = [
        'title'    => __( 'Course Content', 'tutor' ),
        'auth_cap' => '',  // no extra cap needed
    ];
    return $endpoints;
});

// 3) Tell Tutor *which* template to load when that tab is clicked
add_action( 'tutor_dashboard/content/course-content', function() {
    $tpl = get_stylesheet_directory() . '/tutor/dashboard/course-content.php';
    if ( file_exists( $tpl ) ) {
        include $tpl;
    } else {
        echo '<p><strong>Error:</strong> Template not found at <code>' . esc_html( $tpl ) . '</code></p>';
    }
});







    














