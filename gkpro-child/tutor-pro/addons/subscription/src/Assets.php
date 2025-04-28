<?php
/**
 * Manage Assets.
 *
 * @package TutorPro\Subscription
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 3.0.0
 */

namespace TutorPro\Subscription;

use TUTOR\Input;

/**
 * Assets Class.
 *
 * @since 3.0.0
 */
class Assets {
	/**
	 * Register hooks and dependency
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_script' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_script' ) );

		add_filter( 'tutor_localize_data', array( $this, 'extend_localize_data' ) );
		add_filter( 'tutor_course_builder_localized_data', array( $this, 'extend_localize_data' ) );

	}

	/**
	 * Load admin assets
	 *
	 * @since 3.0.0
	 *
	 * @return void
	 */
	public function admin_script() {
		$is_report_page = Input::get( 'page' ) === 'tutor_report' && Input::get( 'sub_page' ) === 'subscriptions';

		if ( in_array( Input::get( 'page' ), array( 'tutor-subscriptions', 'tutor_settings' ), true ) || $is_report_page ) {
			wp_enqueue_script( 'tutor-subscription-backend', Utils::asset_url( 'js/backend.js' ), array(), TUTOR_PRO_VERSION, true );
		}

		if ( 'tutor_settings' === Input::get( 'page' ) && ! Input::has( 'edit' ) ) {
			wp_enqueue_script( 'tutor-membership-settings', Utils::asset_url( 'js/membership-settings/index.min.js' ), array( 'wp-i18n', 'wp-element', 'wp-date' ), TUTOR_PRO_VERSION, true );
		}
	}

	/**
	 * Load frontend assets
	 *
	 * @since 3.0.0
	 *
	 * @return void
	 */
	public function frontend_script() {
		global $post;

		$course_details_page   = is_single() && tutor()->course_post_type === $post->post_type;
		$bundle_details_page   = is_single() && tutor()->bundle_post_type === $post->post_type;
		$is_subscriptions_page = tutor_utils()->is_tutor_frontend_dashboard( 'subscriptions' );
		$is_pricing_shortcode  = false;

		if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, Shortcode::MEMBERSHIP_PRICING ) ) {
			$is_pricing_shortcode = true;
		}

		if ( $is_subscriptions_page || $is_pricing_shortcode || $course_details_page || $bundle_details_page ) {
			wp_enqueue_style( 'tutor-subscription-frontend', Utils::asset_url( 'css/frontend.css' ), array(), TUTOR_PRO_VERSION );
			wp_enqueue_script( 'tutor-subscription-frontend', Utils::asset_url( 'js/frontend.js' ), array(), TUTOR_PRO_VERSION, true );
		}
	}

	/**
	 * Extend localize data
	 *
	 * @since 3.3.0
	 *
	 * @param array $data data.
	 *
	 * @return array
	 */
	public function extend_localize_data( $data ) {
		$data['settings']['membership_only_mode'] = Settings::membership_only_mode_enabled();
		return $data;
	}
}
