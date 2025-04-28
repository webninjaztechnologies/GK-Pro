<?php
/**
 * Password retrive form
 *
 * @package Tutor\Templates
 * @subpackage Template_Part
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 1.4.3
 */

defined( 'ABSPATH' ) || exit;

do_action( 'tutor_before_reset_password_form' ); ?>
<section class="login-page rt-password">
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
			<div class="rt-pass">
<form method="post" class="ttt tutor-reset-password-form tutor-ResetPassword lost_reset_password">
	<?php tutor_nonce_field(); ?>
	<input type="hidden" name="tutor_action" value="tutor_process_reset_password">
	<input type="hidden" name="reset_key" value="<?php echo esc_attr( \TUTOR\Input::get( 'reset_key' ) ); ?>" />
	<input type="hidden" name="user_id" value="<?php echo esc_attr( \TUTOR\Input::get( 'user_id' ) ); ?>" />

	<p>
		<?php
		echo esc_html(
			apply_filters(
				'tutor_reset_password_message',
				esc_html__( 'Enter Password and Confirm Password to reset your password', 'tutor' )
			)
		);
		?>
	</p>

	<div class="tutor-form-row">
		<div class="tutor-form-col-12">
			<div class="tutor-form-group">
				<label><?php esc_html_e( 'Password', 'tutor' ); ?></label>
				<input type="password" name="password" id="password">
			</div>
		</div>
	</div>

	<div class="tutor-form-row">
		<div class="tutor-form-col-12">
			<div class="tutor-form-group">
				<label><?php esc_html_e( 'Confirm Password', 'tutor' ); ?></label>
				<input type="password" name="confirm_password" id="confirm_password">
			</div>
		</div>
	</div>

	<div class="clear"></div>

	<?php do_action( 'tutor_reset_password_form' ); ?>

	<div class="tutor-form-row">
		<div class="tutor-form-col-12">
			<div class="tutor-form-group">
				<button type="submit" class="tutor-btn tutor-btn-primary" value="Reset password">
					<?php esc_html_e( 'Reset password', 'tutor' ); ?>
				</button>
			</div>
		</div>
	</div>

</form>
</div>
	</div>
    </section>
<?php do_action( 'tutor_after_reset_password_form' ); ?>
