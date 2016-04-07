<?php 
/**
 * Background Hover Color Control
 *
 * Outputs the new background color control from 
 * Automattic. This is used to control the background
 * color of a particular font.
 * 
 * @package   Easy_Google_Fonts
 * @author    Sunny Johal - Titanium Themes <support@titaniumthemes.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins/easy-google-fonts/
 * @copyright Copyright (c) 2015, Titanium Themes
 * @version   1.3.9
 * 
 */
?>
<# 
	// Get settings and defaults.
	var egfBackgroundHoverColor = typeof egfSettings.background_hover_color !== "undefined" ? egfSettings.background_hover_color : data.egf_defaults.background_hover_color;
#>
<span class="customize-control-title"><?php _e( 'Background Hover Color', 'easy-google-fonts-mod' ); ?></span>
<div class="customize-control-content egf-background-hover-color-container">
	<input autocomplete="off" class="egf-color-picker-hex" data-default-color="{{ data.egf_defaults.background_hover_color }}" value="{{ egfBackgroundHoverColor }}" type="text" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'easy-google-fonts-mod' ); ?>" />
</div>
