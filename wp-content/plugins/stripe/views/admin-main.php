<?php

/**
 * Represents the view for the administration dashboard.
 *
 * @package    SC
 * @subpackage Views
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorsceb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $sc_options;

?>

<div class="wrap">
	<?php settings_errors(); ?>
	<div id="sc-settings">
		<div id="sc-settings-content">

			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			
			<h2 class="nav-tab-wrapper">
				<?php
					foreach ( $sc_options->get_tabs() as $key => $value ) {
				?>
						<a href="#<?php echo esc_attr( $key ); ?>" class="nav-tab sc-nav-tab <?php echo esc_attr( $is_active ); ?>" data-tab-id="<?php echo esc_attr( $key ); ?>"><?php echo $value; ?></a>
				<?php
					}
				?>
			</h2>

			<div id="tab_container">
				<form method="post" action="options.php">
				<?php
					settings_fields( $sc_options->get_option() );
					$sc_options->load_template( SC_DIR_PATH . 'views/admin-main-tab-default.php' );
					$sc_options->load_template( SC_DIR_PATH . 'views/admin-main-tab-stripe-keys.php' );
					
					submit_button();
				?>
				</form>
			</div><!-- #tab_container-->
		</div><!-- #sc-settings-content -->

		<div id="sc-settings-sidebar">
			<?php 
				if ( class_exists( 'Stripe_Checkout_Pro' ) ) {
					include( SC_DIR_PATH . 'views/admin-sidebar-pro.php' );
				} else {
					include( SC_DIR_PATH . 'views/admin-sidebar.php' );
				}
			?>
		</div>
	</div>
</div><!-- .wrap -->
