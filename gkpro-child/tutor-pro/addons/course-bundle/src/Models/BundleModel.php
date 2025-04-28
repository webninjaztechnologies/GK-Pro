<?php
/**
 * Model for bundle data.
 *
 * @package TutorPro\CourseBundle
 * @subpackage Models
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 2.2.0
 */

namespace TutorPro\CourseBundle\Models;

use Tutor\Cache\TutorCache;
use TUTOR\Course;
use Tutor\Models\CourseModel;
use TutorPro\CourseBundle\CustomPosts\CourseBundle;
use Tutor\Ecommerce\OptionKeys as OptionKeys;
use Tutor\Helpers\QueryHelper;
use WP_Query;

/**
 * BundleModel Class.
 *
 * @since 2.2.0
 */
class BundleModel {

	/**
	 * Ribbon types
	 *
	 * @var string
	 */
	const RIBBON_PERCENTAGE = 'in_percentage';
	const RIBBON_AMOUNT     = 'in_amount';
	const RIBBON_NONE       = 'none';

	/**
	 * Get bundle courses
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id bundle id.
	 *
	 * @return mixed
	 */
	public static function get_bundle_courses( $bundle_id ) {
		$course_ids = self::get_bundle_course_ids( $bundle_id );
		if ( empty( $course_ids ) ) {
			return array();
		}

		$args = array(
			'post_type'      => CourseModel::POST_TYPE,
			'post__in'       => $course_ids,
			'posts_per_page' => -1,
		);

		$query = new WP_Query( apply_filters( 'tutor_course_lead_info_args', $args ) );
		return $query->get_posts();
	}

	/**
	 * Get bundle meta data like total course, topic, quiz etc.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id bundle id.
	 *
	 * @return array
	 */
	public static function get_bundle_meta( $bundle_id ) {
		$cache_key = "bundle_meta_{$bundle_id}";
		$arr       = TutorCache::get( $cache_key );

		if ( false === $arr ) {
			$arr = array(
				'total_courses'        => 0,
				'total_topics'         => 0,
				'total_quizzes'        => 0,
				'total_assignments'    => 0,
				'total_video_contents' => 0,
				'total_video_duration' => 0,
				'total_resources'      => 0,
				'total_duration'       => 0,
			);

			$course_ids = self::get_bundle_course_ids( $bundle_id );
			$meta       = tutor_utils()->get_course_meta_data( $course_ids );

			if ( is_array( $meta ) && count( $meta ) ) {
				foreach ( $meta as $course_id => $course_meta ) {
					$arr['total_topics']      += $course_meta['topics'];
					$arr['total_assignments'] += $course_meta['tutor_assignments'];
					$arr['total_quizzes']     += $course_meta['tutor_quiz'];
				}
			}

			$total_lessons = count( $course_ids ) ? tutor_utils()->get_course_content_ids_by( tutor()->lesson_post_type, tutor()->course_post_type, $course_ids ) : array();

			$arr['total_courses']        = count( $course_ids );
			$arr['total_duration']       = self::convert_seconds_into_human_readable_time( self::get_bundle_duration( $course_ids ), false );
			$arr['total_video_contents'] = count( $total_lessons );

			foreach ( $course_ids as $course_id ) {
				$total_attachments = tutor_utils()->get_attachments(
					$course_id,
					CourseModel::ATTACHMENT_META_KEY,
					true
				);

				$arr['total_resources'] += $total_attachments;
			}

			TutorCache::set( $cache_key, $arr );
		}

		return $arr;
	}

	/**
	 * Get bundle subtotal price.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id bundle id.
	 *
	 * @return int|float
	 */
	public static function get_bundle_subtotal( $bundle_id ) {
		$courses = self::get_bundle_course_ids( $bundle_id );
		$total   = 0;
		foreach ( $courses as $course_id ) {
			$price = tutils()->get_raw_course_price( $course_id );
			if ( $price->regular_price > 0 ) {
				$total += $price->regular_price;
			}
		}

		return $total;
	}

	/**
	 * Count total courses in a bundle.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id bundle id.
	 *
	 * @return int
	 */
	public static function get_total_courses_in_bundle( $bundle_id ) {
		$course_ids = self::get_bundle_course_ids( $bundle_id );
		return count( $course_ids );
	}

	/**
	 * Get bundle course ids.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id course bundle id.
	 *
	 * @return array
	 */
	public static function get_bundle_course_ids( $bundle_id ) {
		$id_str = get_post_meta( $bundle_id, CourseBundle::BUNDLE_COURSE_IDS_META_KEY, true );
		return empty( $id_str ) ? array() : explode( ',', $id_str );
	}

	/**
	 * Get bundle course authors.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id course bundle id.
	 *
	 * @return mixed
	 */
	public static function get_bundle_course_authors( $bundle_id ) {
		$courses = self::get_bundle_course_ids( $bundle_id );
		if ( empty( $courses ) ) {
			return array();
		}

		$query_args = array(
			'meta_query' => array(
				array(
					'key'     => '_tutor_instructor_course_id',
					'value'   => $courses,
					'compare' => 'IN',
				),
			),
			'fields'     => array( 'ID', 'display_name', 'user_email' ),
			'number'     => -1,
		);

		$user_query = new \WP_User_Query( $query_args );
		$authors    = array();

		if ( ! empty( $user_query->get_results() ) ) {
			foreach ( $user_query->get_results() as $user ) {
				$authors[ $user->ID ] = (object) array(
					'user_id'      => $user->ID,
					'display_name' => $user->display_name,
					'user_email'   => $user->user_email,
					'designation'  => get_user_meta( $user->ID, '_tutor_profile_job_title', true ),
					'avatar_url'   => get_avatar_url( $user->ID, array( 'size' => 96 ) ),
				);
			}
		}

		return array_values( $authors );
	}

	/**
	 * Get bundle course categories.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id course bundle id.
	 *
	 * @return mixed
	 */
	public static function get_bundle_course_categories( $bundle_id ) {
		$courses = self::get_bundle_course_ids( $bundle_id );
		if ( empty( $courses ) ) {
			return array();
		}

		$terms = wp_get_object_terms( $courses, 'course-category', array( 'fields' => 'all' ) );

		$categories = array();
		if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				$categories[] = array(
					'term_id' => $term->term_id,
					'name'    => $term->name,
					'slug'    => $term->slug,
				);
			}
		}

		return $categories;
	}

	/**
	 * Get total sold number of a course bundle.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id course bundle id.
	 *
	 * @return int
	 */
	public static function get_total_bundle_sold( $bundle_id ) {
		global $wpdb;

		$cache_key = "tutor_bundle_sold_{$bundle_id}";
		$count     = TutorCache::get( $cache_key );
		if ( false === $count ) {
			$count = $wpdb->get_var(
				$wpdb->prepare(
					"SELECT COUNT(*) 
					FROM {$wpdb->posts}
					WHERE post_type = %s
					AND post_status = %s 
					AND post_parent = %d",
					'tutor_enrolled',
					'completed',
					$bundle_id
				)
			);

			TutorCache::set( $cache_key, $count );
		}

		return (int) $count;
	}

	/**
	 * Get bundle id by course id.
	 *
	 * @since 2.2.0
	 *
	 * @param int $course_id course id.
	 *
	 * @return int|bool  bundle id or false if course is not in a bundle.
	 */
	public static function get_bundle_id_by_course( $course_id ) {
		global $wpdb;

		$data = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT * 
        		FROM {$wpdb->postmeta}
        		WHERE meta_key = %s
				AND meta_value LIKE %s",
				CourseBundle::BUNDLE_COURSE_IDS_META_KEY,
				"%{$course_id}%"
			)
		);

		return is_object( $data ) ? $data->post_id : false;
	}

	/**
	 * Get bundle ids by course id.
	 *
	 * @since 3.2.0
	 *
	 * @param int $course_id the course id.
	 *
	 * @return array
	 */
	public static function get_bundle_ids_by_course( $course_id ) {
		global $wpdb;

		$data = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT post_id 
        		FROM {$wpdb->postmeta}
        		WHERE meta_key = %s
				AND meta_value LIKE %s",
				CourseBundle::BUNDLE_COURSE_IDS_META_KEY,
				"%{$course_id}%"
			)
		);

		return $data;
	}

	/**
	 * Delete a course bundle.
	 *
	 * @since 2.2.0
	 *
	 * @param int $bundle_id course bundle id.
	 *
	 * @return bool
	 */
	public static function delete_bundle( $bundle_id ) {
		if ( get_post_type( $bundle_id ) !== CourseBundle::POST_TYPE ) {
			return false;
		}

		wp_delete_post( $bundle_id, true );
		return true;
	}

	/**
	 * Update course bundle ids
	 *
	 * @since 2.2.0
	 *
	 * @param int   $bundle_id bundle id.
	 * @param array $course_ids course ids array, ex: [1,2,3].
	 *
	 * @return bool
	 */
	public static function update_bundle_course_ids( int $bundle_id, array $course_ids ): bool {
		// Validate.
		if ( ! $bundle_id ) {
			return false;
		}

		if ( CourseBundle::POST_TYPE !== get_post_type( $bundle_id ) ) {
			return false;
		}

		// Update post meta.
		update_post_meta(
			$bundle_id,
			CourseBundle::BUNDLE_COURSE_IDS_META_KEY,
			implode( ',', $course_ids )
		);

		return true;
	}

	/**
	 * Remove a course from bundle & update bundle course ids meta
	 *
	 * @since 2.2.0
	 *
	 * @param integer $course_id course id to remove.
	 * @param integer $bundle_id bundle id.
	 *
	 * @return bool
	 */
	public static function remove_course_from_bundle( int $course_id, int $bundle_id ) {
		$course_ids = self::get_bundle_course_ids( $bundle_id );

		// Remove course from bundle.
		$course_ids = array_diff( $course_ids, array( $course_id ) );

		return self::update_bundle_course_ids( $bundle_id, $course_ids );
	}

	/**
	 * Get bundles by a instructor
	 *
	 * @since 2.2.0
	 *
	 * @param integer      $instructor_id instructor id.
	 * @param array|string $post_status post status.
	 * @param integer      $offset offset.
	 * @param integer      $limit limit.
	 * @param boolean      $count_only count only.
	 *
	 * @return array|null|object
	 */
	public static function get_bundles_by_instructor( $instructor_id = 0, $post_status = array( 'publish' ), int $offset = 0, int $limit = PHP_INT_MAX, $count_only = false ) {
		global $wpdb;
		$offset        = sanitize_text_field( $offset );
		$limit         = sanitize_text_field( $limit );
		$instructor_id = tutils()->get_user_id( $instructor_id );

		if ( empty( $post_status ) || 'any' === $post_status ) {
			$where_post_status = '';
		} else {
			if ( ! is_array( $post_status ) ) {
				$post_status = array( $post_status );
			}

			$statuses          = "'" . implode( "','", $post_status ) . "'";
			$where_post_status = "AND $wpdb->posts.post_status IN({$statuses}) ";
		}

		$select_col   = $count_only ? " COUNT(DISTINCT $wpdb->posts.ID) " : " $wpdb->posts.* ";
		$limit_offset = $count_only ? '' : " LIMIT $offset, $limit ";

		//phpcs:disable
		$query = $wpdb->prepare(
			"SELECT $select_col
			FROM 	$wpdb->posts
			WHERE	1 = 1 {$where_post_status}
				AND $wpdb->posts.post_type = %s
				AND $wpdb->posts.post_author = %d
			ORDER BY $wpdb->posts.post_date DESC $limit_offset",
			CourseBundle::POST_TYPE,
			$instructor_id
		);

		return $count_only ? $wpdb->get_var( $query ) : $wpdb->get_results( $query, OBJECT );
		//phpcs:enable
	}

	/**
	 * Get bundle duration in seconds
	 *
	 * It will merge all the course durations and return in seconds
	 *
	 * @since 2.2.0
	 *
	 * @param array $course_ids course ids array.
	 *
	 * @return integer
	 */
	public static function get_bundle_duration( array $course_ids ): int {
		$total_duration = 0;
		if ( ! count( $course_ids ) ) {
			return $total_duration;
		}

		// Merge all course durations.
		foreach ( $course_ids as $id ) {
			$duration         = get_post_meta( $id, '_course_duration', true );
			$duration_hours   = (int) tutor_utils()->avalue_dot( 'hours', $duration ) * 3600;
			$duration_minutes = (int) tutor_utils()->avalue_dot( 'minutes', $duration ) * 60;
			$duration_seconds = (int) tutor_utils()->avalue_dot( 'seconds', $duration );

			$total_duration += $duration_hours + $duration_minutes + $duration_seconds;
		}

		return $total_duration;
	}

	/**
	 * Convert seconds to human readable time
	 *
	 * It will convert seconds in hour, min & seconds
	 *
	 * @since 2.2.0
	 *
	 * @param int  $seconds seconds.
	 * @param bool $echo echo or return.
	 *
	 * @return string|void
	 */
	public static function convert_seconds_into_human_readable_time( int $seconds, $echo = true ) {
		$hours             = floor( $seconds / 3600 );
		$minutes           = floor( ( $seconds % 3600 ) / 60 );
		$remaining_seconds = $seconds % 60;

		$human_readable_time = sprintf( '%02d:%02d:%02d', $hours, $minutes, $remaining_seconds );

		if ( $echo ) {
			echo esc_html( $human_readable_time );
		} else {
			return $human_readable_time;
		}
	}

	/**
	 * Get bundle ribbon options
	 *
	 * @since 2.2.0
	 *
	 * @return array
	 */
	public static function get_ribbon_display_options(): array {
		$currency_symbol = tutor_utils()->currency_symbol();

		$options = array(
			self::RIBBON_PERCENTAGE => __( 'Show Discount % Off', 'tutor-pro' ),
			self::RIBBON_AMOUNT     => sprintf( __( 'Show Discounted Amount (%s)', 'tutor-pro' ), $currency_symbol ), //phpcs:ignore WordPress.WP.I18n.MissingTranslatorsComment
			self::RIBBON_NONE       => __( 'Show None', 'tutor-pro' ),
		);

		return apply_filters( 'tutor_pro_bundle_ribbon_display_options', $options );
	}

	/**
	 * Enroll a user to bundle courses
	 *
	 * @since 2.2.2
	 *
	 * @param int $bundle_id bundle id.
	 * @param int $user_id user id.
	 *
	 * @return void
	 */
	public static function enroll_to_bundle_courses( $bundle_id, $user_id ) {
		$bundle_course_ids = self::get_bundle_course_ids( $bundle_id );
		if ( count( $bundle_course_ids ) > 0 ) {
			foreach ( $bundle_course_ids as $course_id ) {
				add_filter(
					'tutor_enroll_data',
					function( $data ) {
						$data['post_status'] = 'completed';
						return $data;
					}
				);
				tutor_utils()->do_enroll( $course_id, 0, $user_id );
			}
		}
	}

	/**
	 * Un-enroll a user to bundle courses
	 *
	 * @since 2.2.2
	 *
	 * @param int $bundle_id bundle id.
	 * @param int $user_id user id.
	 *
	 * @return void
	 */
	public static function disenroll_from_bundle_courses( $bundle_id, $user_id ) {
		$bundle_course_ids = self::get_bundle_course_ids( $bundle_id );
		if ( count( $bundle_course_ids ) > 0 ) {
			foreach ( $bundle_course_ids as $course_id ) {
				$has_enrollment = tutor_utils()->is_enrolled( $course_id, $user_id, false );
				if ( $has_enrollment ) {
					tutor_utils()->update_enrollments( 'cancel', array( $has_enrollment->ID ) );
				}
			}
		}
	}

	/**
	 * Check if user is enrolled in bundle courses
	 *
	 * @since 3.3.0
	 *
	 * @param int $bundle_id the bundle id.
	 * @param int $user_id   the user id.
	 *
	 * @return bool
	 */
	public static function is_enrolled_to_bundle_courses( $bundle_id, $user_id ) {
		$bundle_course_ids = self::get_bundle_course_ids( $bundle_id );
		$is_enrolled       = true;
		if ( count( $bundle_course_ids ) > 0 ) {
			foreach ( $bundle_course_ids as $course_id ) {
				$has_enrollment = tutor_utils()->is_enrolled( $course_id, $user_id, false );
				if ( ! $has_enrollment ) {
					$is_enrolled = false;
				}
			}
		}
		return $is_enrolled;
	}


	/**
	 * Get post meta fields.
	 *
	 * @since 2.0.0
	 *
	 * @return array
	 */
	public static function get_post_meta_fields() {
		return array(
			'sale_price',
			'ribbon_type',
			'course_benefits',
		);
	}

	/**
	 * Get bundle data
	 *
	 * @since 3.2.0
	 *
	 * @param int $bundle_id bundle id.
	 *
	 * @return array
	 */
	public static function get_bundle_data( $bundle_id ): array {
		$overview   = self::get_bundle_meta( $bundle_id );
		$authors    = self::get_bundle_course_authors( $bundle_id );
		$categories = self::get_bundle_course_categories( $bundle_id );

		$course_ids = self::get_bundle_course_ids( $bundle_id );

		$courses = array();
		foreach ( $course_ids as $course_id ) {
			$post = get_post( $course_id );
			if ( ! $post ) {
				continue;
			}

			$course = Course::get_mini_info( $post );
			if ( $course ) {
				$courses[] = $course;
			}
		}

		$subtotal_price      = self::get_bundle_regular_price( $bundle_id );
		$subtotal_sale_price = tutor_utils()->get_raw_course_price( $bundle_id )->sale_price;

		$data = array(
			'overview'                => $overview,
			'authors'                 => $authors,
			'courses'                 => $courses,
			'categories'              => $categories,
			'subtotal_price'          => tutor_utils()->tutor_price( $subtotal_price ),
			'subtotal_raw_price'      => $subtotal_price,
			'subtotal_sale_price'     => tutor_utils()->tutor_price( $subtotal_sale_price ),
			'subtotal_raw_sale_price' => $subtotal_sale_price,
			'course_ids'              => $course_ids,
		);

		return $data;
	}

	/**
	 * Get bundle price
	 *
	 * It will calculate all the course price of a bundle
	 *
	 * @since 3.2.0
	 *
	 * @param int $bundle_id bundle id.
	 *
	 * @return int bundle regular price
	 */
	public static function get_bundle_regular_price( int $bundle_id ) {
		$course_ids = self::get_bundle_course_ids( $bundle_id );
		$price      = 0;

		foreach ( $course_ids as $course_id ) {
			if ( tutor_utils()->is_monetize_by_tutor() ) {
				$course_price = tutor_utils()->get_raw_course_price( $course_id );
				$price       += $course_price->regular_price;
			} else {
				$product_id = tutor_utils()->get_course_product_id( $course_id );
				$product    = wc_get_product( $product_id );
				if ( tutor_utils()->is_course_purchasable( $course_id ) && $product ) {
					$product_price = (float) $product->get_regular_price();
					$price        += $product_price;
				}
			}
		}

		return $price;
	}

	/**
	 * Wrapper method to get raw course price
	 *
	 * @since 2.2.0
	 *
	 * @param integer $bundle_id int bundle id.
	 *
	 * @return int|float
	 */
	public static function get_bundle_sale_price( int $bundle_id ) {
		$price = tutor_utils()->get_raw_course_price( $bundle_id );
		return is_numeric( $price->sale_price ) ? $price->sale_price : 0;
	}

	/**
	 * Get bundle discount by ribbon settings of bundle.
	 *
	 * @since 2.2.0
	 *
	 * @param int    $bundle_id bundle id.
	 * @param string $ribbon_type ribbon type.
	 * @param bool   $symbol symbol.
	 *
	 * @return int|string
	 */
	public static function get_bundle_discount_by_ribbon( $bundle_id, $ribbon_type, $symbol = true ) {
		if ( self::RIBBON_NONE === $ribbon_type ) {
			return '';
		}

		$is_tutor_monetize = tutor_utils()->is_monetize_by_tutor();

		$regular_price = self::get_bundle_regular_price( $bundle_id );
		$sale_price    = self::get_bundle_sale_price( $bundle_id );

		if ( self::RIBBON_PERCENTAGE === $ribbon_type ) {
			$discount = 0;
			try {
				$discount = $regular_price ? ( $regular_price - $sale_price ) / $regular_price * 100 : 0;
			} catch ( \Throwable $th ) {
				$discount = 0;
			}

			$discount = round( $discount, 2 );
			return $symbol ? $discount . '%' : $discount;
		}

		if ( self::RIBBON_AMOUNT === $ribbon_type ) {
			$discount = $regular_price - $sale_price;
			$discount = round( $discount, 2 );

			$currency_sign = $is_tutor_monetize ? tutor_get_currency_symbol_by_code( tutor_utils()->get_option( OptionKeys::CURRENCY_CODE ) ) : get_woocommerce_currency_symbol();

			return $symbol ? $currency_sign . $discount : $discount;
		}

	}

	/**
	 * Get enrollment ids by bundle enrollment.
	 *
	 * @since 3.2.0
	 *
	 * @param int $bundle_id bundle id.
	 *
	 * @return array list of enrollment id
	 */
	public static function get_bundle_enrollment_ids( $bundle_id ) {
		global $wpdb;

		$bundle_course_ids = array_map( 'intval', self::get_bundle_course_ids( $bundle_id ) );
		$course_ids_str    = QueryHelper::prepare_in_clause( $bundle_course_ids );

		$enrollment_ids = $wpdb->get_col(
			// phpcs:ignore -- $course_ids_str sanitized.
			$wpdb->prepare( "SELECT ID FROM {$wpdb->posts} p WHERE p.post_type = %s AND p.post_parent IN ({$course_ids_str})", 'tutor_enrolled' )
		);

		return $enrollment_ids;
	}
}
