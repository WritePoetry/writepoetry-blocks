<?php
/**
 * Plugin Name:     Writepoetry Blocks
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     writepoetry-blocks
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Writepoetry_Blocks
 */

// Your code starts here.

// Load the autoloader.
if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

$container = require_once __DIR__ . '/bootstrap/container.php';
