<?php 

	/**
	 * Represents the view for the Default Settings tab.
	 *
	 * @package    SC
	 * @subpackage Views
	 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorsceb@gmail.com>
	 */

	global $sc_options; 
?>

<!-- Default Settings tab HTML -->
<div class="sc-admin-hidden" id="default-settings-tab">
	<div>
		<a href="<?php echo Stripe_Checkout_Admin::ga_campaign_url( SC_WEBSITE_BASE_URL . 'docs/shortcodes/stripe-checkout/', 'stripe_checkout', 'settings', 'docs' ); ?>" target="_blank">
			<?php _e( 'See shortcode options and examples', 'sc' ); ?>
		</a>
		<?php $sc_options->description( __( 'Shortcode attributes take precedence and will always override site-wide default settings.', 'sc' ) ); ?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'name' ) ); ?>"><?php _e( 'Site Name', 'sc' ); ?></label>
		<?php 
			$sc_options->textbox( 'name', 'regular-text' ); 
			$sc_options->description( __( 'The name of your store or website. Defaults to Site Name.', 'sc' ) );
		?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'currency' ) ); ?>"><?php _e( 'Currency', 'sc' ); ?></label>
		<?php
			$sc_options->textbox( 'currency', 'regular-text' );
			$sc_options->description( sprintf( __( 'Specify a currency using it\'s <a href="%s" target="_blank">3-letter ISO Code</a>. Defaults to USD.', 'sc' ), 'https://support.stripe.com/questions/which-currencies-does-stripe-support' ) );
		?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'image_url' ) ); ?>"><?php _e( 'Image URL', 'sc' ); ?></label>
		<?php 
			$sc_options->textbox( 'image_url', 'regular-text' );
			$sc_options->description( __( 'A URL pointing to a square image of your brand or product. The recommended minimum size is 128x128px.', 'sc' ) );
		?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'checkout_button_label' ) ); ?>"><?php _e( 'Checkout Button Label', 'sc' ); ?></label>
		<?php 
			$sc_options->textbox( 'checkout_button_label', 'regular-text' );
			$sc_options->description( __( 'The label of the payment button in the checkout form. You can use {{amount}} to display the amount.', 'sc' ) );
		?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'payment_button_label' ) ); ?>"><?php _e( 'Payment Button Label', 'sc' ); ?></label>
		<?php 
			$sc_options->textbox( 'payment_button_label', 'regular-text' );
			$sc_options->description( __( 'Text to display on the default blue button that users click to initiate a checkout process.', 'sc' ) );
		?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'success_redirect_url' ) ); ?>"><?php _e( 'Success Redirect URL', 'sc' ); ?></label>
		<?php 
			$sc_options->textbox( 'success_redirect_url', 'regular-text' ); 
			$sc_options->description( __( 'The URL that the user should be redirected to after a successful payment.', 'sc' ) );
		?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'disable_success_message' ) ); ?>"><?php _e( 'Disable Success Message', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'disable_success_message' ); ?>
		<span><?php _e( 'Disable default success message. Useful if you are redirecting to your own success page.', 'sc' ); ?></span>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'failure_redirect_url' ) ); ?>"><?php _e( 'Failure Redirect URL', 'sc' ); ?></label>
		<?php 
			$sc_options->textbox( 'failure_redirect_url', 'regular-text' ); 
			$sc_options->description( __( 'The URL that the user should be redirected to after a failed payment.', 'sc' ) );
		?>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'billing' ) ); ?>"><?php _e( 'Billing', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'billing' ); ?>
		<span><?php _e( 'Require the user to enter their billing address during checkout.', 'sc' ); ?></span>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'verify_zip' ) ); ?>"><?php _e( 'Verify Zip', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'verify_zip' ); ?>
		<span><?php _e( 'Verifies the zip code of the card.', 'sc' ); ?></span>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'enable_remember' ) ); ?>"><?php _e( 'Enable Remember', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'enable_remember' ); ?>
		<span><?php _e( 'Adds a "Remember Me" option to the checkout form to allow the user to store their credit card for future use with other sites using Stripe.', 'sc' ); ?></span>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'use_bitcoin' ) ); ?>"><?php _e( 'Enable Bitcoin', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'use_bitcoin' ); ?>
		<span><?php printf( __( 'Enable accepting <a href="%s" target="_blank">Bitcoin</a> as a payment option.', 'sc' ), 'https://stripe.com/docs/guides/bitcoin' ); ?></span>
	</div>
	
	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'alipay' ) ); ?>"><?php _e( 'Enable Alipay (beta)', 'sc' ); ?></label>
		<?php 
			$sc_options->selectbox( 'alipay', array( 
												'Disabled' => 'false', 
												'Enabled' => 'true', 
												'Auto-Detect' => 'auto' ) 
									); 
			$sc_options->description( sprintf( __( 'Enable accepting <a href="%s" target="_blank">Alipay</a> as a payment option.', 'sc' ), 'https://stripe.com/docs/guides/alipay-beta' ) );
		?>
	</div>
	
	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'alipay_reusable' ) ); ?>"><?php _e( 'Enable Alipay Reusable', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'alipay_reusable' ); ?>
		<span><?php _e( "Enable reusable access to the customer's account when using Alipay.", 'sc' ); ?></span>
	</div>
	
	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'locale' ) ); ?>"><?php _e( 'Set Auto Locale', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'locale' ); ?>
		<span><?php _e( "This option will render a localized Checkout UI, based upon the language preferences of the user's web browser. Enabling this will disable the billing address.", 'sc' ); ?></span>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'disable_css' ) ); ?>"><?php _e( 'Disable Plugin CSS', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'disable_css' ); ?>
		<span><?php _e( "If this option is checked, this plugin's CSS file will not be referenced.", 'sc' ); ?></span>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'always_enqueue' ) ); ?>"><?php _e( 'Always Enqueue', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'always_enqueue' ); ?>
		<span><?php _e( 'Enqueue this plugin\'s scripts and styles on every post and page. Useful if using shortcodes in widgets or other non-standard locations.', 'sc' ); ?></span>
	</div>

	<div>
		<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'uninstall_save_settings' ) ); ?>"><?php _e( 'Save Settings', 'sc' ); ?></label>
		<?php $sc_options->checkbox( 'uninstall_save_settings' ); ?>
		<span><?php _e( 'Save your settings when uninstalling this plugin. Useful when upgrading or re-installing.', 'sc' ); ?></span>
	</div>
	
	
	<?php do_action( 'sc_settings_tab_default' ); ?>
</div>
