<?php

/*
Plugin Name: RespImage
Plugin URI: http://elf02.de/2014/07/13/respimage-wordpress-plugin/
Description: Responsive image solution using Picturefill.js.
Version: 1.0.0
Author: ChrisB
Author URI: http://elf02.de
License: MIT
*/

defined('ABSPATH') OR exit;


define('PLUGIN_FILE_RESPIMAGE', __FILE__);

require_once(
    sprintf(
        '%s/inc/%s.class.php',
        dirname(__FILE__),
        'respimage'
    )
);


add_action(
    'plugins_loaded',
    array(
        'respimage',
        'instance'
    )
);

?>