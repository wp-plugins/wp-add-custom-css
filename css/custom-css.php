<?php
header("Content-type: text/css");
$custom_css = get_option('wpacc_settings');
echo esc_attr($custom_css['main_custom_style']);
?>