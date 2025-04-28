<?php
// Enqueue custom css
function enqueue_custom_css(){
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
        wp_enqueue_style('our-courses', get_template_directory_uri() . '/assets/css/our-courses.css', array(), '1.0.0', 'all');
    }
    if (is_singular('product')) {
        wp_enqueue_style('course-detail', get_template_directory_uri() . '/assets/css/course-detail.css', array(), '1.0.0', 'all');
    }
    if (is_page('login') || is_page('dashboard') || is_page('retrieve-password')) {
        wp_enqueue_style('registration', get_template_directory_uri() . '/assets/css/login.css', array(), '1.0.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_css');

// Enqueue custom JS
function enqueue_custom_script(){
    wp_enqueue_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('global-script', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), null, true);
    wp_localize_script('global-script', 'localize_data', array(
        'site_url' => get_site_url()
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');


// Function to display the footer logo
function the_footer_logo() {
    $footer_logo_url = get_theme_mod('custom_footer_image');
    if ($footer_logo_url) {
        echo '<a href="/"><img src="' . esc_url($footer_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '"></a>';
    }
}


// theme setup code
function theme_setup()
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
add_action('after_setup_theme', 'theme_setup');



// allow svg
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


function footer_customizer_settings($wp_customize) {

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
add_action('customize_register', 'footer_customizer_settings');

function footer_social_settings($wp_customize) {
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
add_action('customize_register', 'footer_social_settings');

// add_action('template_redirect', function() {
//     if (trim($_SERVER['REQUEST_URI'], '/') === 'dashboard/retrieve-password') {
//         wp_redirect(home_url('/retrieve-password/'));
//         exit;
//     }
// });




