<?php if (!defined('FW')) die('Forbidden');

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/slider');

wp_enqueue_style('wa-shortcode-slider', $uri . '/static/jquery.bxslider/jquery.bxslider.css');
wp_enqueue_script('wa-shortcode-slider', $uri . '/static/jquery.bxslider/jquery.bxslider.min.js');
wp_enqueue_script('wa-slider', $uri . '/static/js/scripts.js');