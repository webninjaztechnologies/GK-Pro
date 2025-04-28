<?php
/**
 * Display single login
 * Template Name: Login Student
 * @package Tutor\Templates
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! tutor_utils()->get_option( 'enable_tutor_native_login', null, true, true ) ) {
	// Redirect to wp native login page.
	header( 'Location: ' . wp_login_url( tutor_utils()->get_current_url() ) );
	exit;
}

tutor_utils()->tutor_custom_header();
$login_url = tutor_utils()->get_option( 'enable_tutor_native_login', null, true, true ) ? '' : wp_login_url( tutor()->current_url );
?>

<?php
//phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
do_action( 'tutor/template/login/before/wrap' );
?>
<section class="login-page">
        <div class="login-body">
            <div class="login-content1">
                <div class="owl-carousel login-carousel">
                    <div class="item">
                        <div class="login-text">
                            <img src="<?php the_field('login_carousel1'); ?>" alt="">
                            <h3><?php the_field('login_carousel_heading1'); ?></h3>
                            <p><?php the_field('login_carousel_description1'); ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="login-text">
                            <img src="<?php the_field('login_carousel2'); ?>" alt="">
                            <h3><?php the_field('login_carousel_heading2'); ?></h3>
                            <p><?php the_field('login_carousel_desccription2'); ?></p>
                        </div>   
                    </div>
                    <div class="item">
                        <div class="login-text">
                            <img src="<?php the_field('login_carousel3'); ?>" alt="">
                            <h3><?php the_field('login_carousel_heading3'); ?></h3>
                            <p><?php the_field('login_carousel_desccription3'); ?></p>
                        </div>  
                    </div>
                </div>
            </div>
			<div class="login-content login-page-temp">
				<div <?php tutor_post_class( 'tutor-page-wrap' ); ?>>
					<div class="tutor-template-segment tutor-login-wrap">

						<div class="tutor-login-form-wrapper">
							<h3 class="cust-signin-heading">Sign In</h3>
							<div class="tutor-fs-5 tutor-color-black tutor-mb-24 welcome-msg">
								<?php esc_html_e( 'Welcome back, you’ve been missed!', 'tutor' ); ?>
							</div>
							<?php
								// load form template.
								// $login_form = trailingslashit( tutor()->path ) . 'templates/login-form.php';
								$login_form = get_stylesheet_directory() . '/tutor/login-form.php';
								tutor_load_template_from_custom_path(
									$login_form,
									false
								);
							?>
						</div>
						<?php do_action( 'tutor_after_login_form_wrapper' ); ?>
					</div>
				</div>
			</div>
			</div>
    </section>
<?php
	//phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
	do_action( 'tutor/template/login/after/wrap' );
	tutor_utils()->tutor_custom_footer();
?>
