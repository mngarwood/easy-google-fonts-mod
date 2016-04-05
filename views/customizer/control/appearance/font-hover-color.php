<?php 
/**
 * Font Hover Color Select Control
 */
?>
<#
	// Get settings and defaults.
	var egfFontHoverColor = typeof egfSettings.font_hover_color !== "undefined" ? egfSettings.font_hover_color : data.egf_defaults.font_hover_color;
#>
<span class="customize-control-title"><?php _e( 'Font Hover Color', 'easy-google-fonts-mod' ); ?></span>
<div class="customize-control-content egf-font-hover-color-container">
	<input autocomplete="off" class="egf-color-picker-hex" data-default-color="{{ data.egf_defaults.font_hover_color }}" value="{{ egfFontHoverColor }}" type="text" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'easy-google-fonts-mod' ); ?>"/>
</div>