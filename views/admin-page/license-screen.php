<?php 
/**
 * License Controls Screen
 *
 * This file contains the closing the tags for the 
 * html settings page.
 * 
 * @package   Easy_Google_Fonts
 * @author    Sunny Johal - Titanium Themes <support@titaniumthemes.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins/easy-google-fonts/
 * @copyright Copyright (c) 2014, Titanium Themes
 * @version   1.3.9
 * 
 */
?>

<h3 class="title"><?php _e( 'License Key', $this->plugin_slug ); ?></h3>
<p><?php _e( 'Please enter your license key in the box below and click the Save License Key button.', $this->plugin_slug ); ?></p>
<div class="manage-controls manage-license-key <?php echo $validity; ?>">
	<form enctype="multipart/form-data" method="get" action="" id="" autocomplete="off">
		<input id="license-key" type="text" class="" value="<?php echo $license_key; ?>">
		<p class="key-feedback howto">
			<span class="valid-key"><?php _e( 'Your license key is valid and automatic updates are enabled.', $this->plugin_slug ); ?></span>
			<span class="invalid-key"><?php _e( 'Please enter a valid license key', $this->plugin_slug ); ?></span>
		</p>
		<?php 
			/**
			 * Create Font Control Nonce Fields for Security
			 * 
			 * This ensures that the request to modify controls 
			 * was an intentional request from the user. Used in
			 * the Ajax request for validation.
			 *
			 * @link http://codex.wordpress.org/Function_Reference/wp_nonce_field 	wp_nonce_field()
			 * 
			 */
			wp_nonce_field( 'tt_font_edit_control_instance', 'tt_font_edit_control_instance_nonce' );
			wp_nonce_field( 'tt_font_delete_control_instance', 'tt_font_delete_control_instance_nonce' );
			wp_nonce_field( 'tt_font_create_control_instance', 'tt_font_create_control_instance_nonce' );
		?>			
	</form>
</div><!-- /.manage-license-key -->
<?php 
	submit_button( 
		__( 'Save License Key', $this->plugin_slug ), 
		'primary', 
		'submit', 
		false, 
		array( 
			'id' => 'save_license_key',
			'data-redirect-url' => $this->license_url,
		) 
	);

	echo ' ';

	submit_button(
		__( 'Remove License Key', $this->plugin_slug ),
		'secondary',
		'submit',
		false,
		array(
			'id' => 'remove_license_key',
			'data-redirect-url' => $this->license_url,
		)
	);
?>
<div class="spinner spinner-left"></div>
<div class="clearfix"></div>

<div class="license-feedback">
	<div class="valid-key">
		<h3><?php _e( 'What happens after I enter a valid license key?', $this->plugin_slug ); ?></h3>
		<p><?php _e( 'You\'ll be able to receive automatic updates for the plugin via the dashboard.', $this->plugin_slug ); ?></p>
	</div>
</div>