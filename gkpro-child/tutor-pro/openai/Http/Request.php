<?php
/**
 * Helper class for handling magic ai functionalities
 *
 * @package TutorPro\OpenAI
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 3.0.0
 */

namespace TutorPro\OpenAI\Http;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Extend the HttpHelper class for consistency.
 *
 * @since 3.0.0
 */
class Request {
	/**
	 * 200 serial HTTP status code constants
	 */
	const STATUS_OK       = 200;
	const STATUS_CREATED  = 201;
	const STATUS_ACCEPTED = 202;

	/**
	 * 400 serial HTTP status code constants
	 */
	const STATUS_BAD_REQUEST          = 400;
	const STATUS_UNAUTHORIZED         = 401;
	const STATUS_FORBIDDEN            = 403;
	const STATUS_NOT_FOUND            = 404;
	const STATUS_METHOD_NOT_ALLOWED   = 405;
	const STATUS_TOO_MANY_REQUESTS    = 429;
	const STATUS_UNPROCESSABLE_ENTITY = 422;

	/**
	 * 500 serial HTTP status code constants
	 */
	const STATUS_INTERNAL_SERVER_ERROR = 500;
	const STATUS_SERVICE_UNAVAILABLE   = 503;
	const STATUS_BAD_GATEWAY           = 502;
	const STATUS_GATEWAY_TIMEOUT       = 504;

	/**
	 * Set the request timeout for the http requests.
	 *
	 * @since 3.0.0
	 *
	 * @var float The timeout value.
	 */
	const REQUEST_TIMEOUT = 120;

	/**
	 * Response body
	 *
	 * @since 3.0.0
	 *
	 * @var mixed
	 */
	private $body;

	/**
	 * Response headers
	 *
	 * @since 3.0.0
	 *
	 * @var mixed
	 */
	private $headers;

	/**
	 * Response status code
	 *
	 * @since 3.0.0
	 *
	 * @var int
	 */
	private $status_code;

	/**
	 * Hold WP error for request.
	 *
	 * @since 3.0.0
	 *
	 * @var \WP_Error
	 */
	private $wp_error;

	/**
	 * Parse response from HTTP response.
	 *
	 * @since 3.0.0
	 *
	 * @param mixed $response response of request.
	 *
	 * @return void
	 */
	private function parse_response( $response ) {
		if ( is_wp_error( $response ) ) {
			$this->wp_error = $response;
		} else {
			$this->body        = wp_remote_retrieve_body( $response );
			$this->headers     = wp_remote_retrieve_headers( $response );
			$this->status_code = wp_remote_retrieve_response_code( $response );
		}
	}

	/**
	 * Make HTTP GET request.
	 *
	 * @since 3.0.0
	 *
	 * @param string $url     The URL for the request.
	 * @param array  $data    Optional. The data to include in the request (added to the URL as query parameters).
	 * @param array  $headers Optional. Additional headers for the request.
	 *
	 * @return self
	 */
	public static function get( $url, $data = array(), $headers = array() ) {
		$url_with_params = add_query_arg( $data, $url );

		$response = wp_remote_get( $url_with_params, array( 'headers' => $headers ) );

		$self = new self();
		$self->parse_response( $response );

		return $self;
	}

	/**
	 * Make HTTP POST request.
	 *
	 * @since 3.0.0
	 *
	 * @param string $url     The URL for the request.
	 * @param array  $data    Optional. The data to include in the request body.
	 * @param array  $headers Optional. Additional headers for the request.
	 *
	 * @return self
	 */
	public static function post( $url, $data = array(), $headers = array() ) {
		$response = wp_remote_post(
			$url,
			array(
				'body'    => $data,
				'headers' => $headers,
				'timeout' => self::REQUEST_TIMEOUT,
			),
		);

		$self = new self();
		$self->parse_response( $response );

		return $self;
	}

	/**
	 * Get body
	 *
	 * @since 3.0.0
	 *
	 * @return mixed
	 */
	public function get_body() {
		return $this->body;
	}

	/**
	 * Get body data as JSON
	 *
	 * @since 3.0.0
	 *
	 * @return mixed
	 */
	public function get_json() {
		return json_decode( $this->body );
	}

	/**
	 * Get headers
	 *
	 * @since 3.0.0
	 *
	 * @return mixed
	 */
	public function get_headers() {
		return $this->headers;
	}

	/**
	 * Get status code.
	 *
	 * @since 3.0.0
	 *
	 * @return int
	 */
	public function get_status_code() {
		return $this->status_code;
	}

	/**
	 * Check any error occur.
	 *
	 * @since 3.0.0
	 *
	 * @return boolean
	 */
	public function has_error() {
		return ! is_null( $this->wp_error );
	}

	/**
	 * Get error message.
	 *
	 * @since 3.0.0
	 *
	 * @return mixed
	 */
	public function get_error_message() {
		return $this->wp_error->get_error_message();
	}
}
