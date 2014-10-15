<?php
header("Content-type: text/css");
$custom_css = get_option('wpacc_settings');
$custom_css = wp_kses( $custom_css['main_custom_style'], array( '\'', '\"' ) );
echo $custom_css;
?>