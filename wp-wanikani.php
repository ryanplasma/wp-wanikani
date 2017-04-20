<?php
/*
Plugin Name: WP WaniKani
Plugin URI:  https://wordplas.com
Description: Widgets for displaying WaniKani stats
Version:     0.1.0
Author:      Ryan Plas
Author URI:  https://wordplas.com
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-wanikani
*/

use WPWaniKani\Plugin\WPWaniKaniPlugin;

require_once(__DIR__ . '/vendor/autoload.php');

// Define paths to this directory for use in other files.
define('WPWANIKANI_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('WPWANIKANI_PLUGIN_URL', plugin_dir_url(__FILE__));

// Instantiate new plugin object
$plugin = new WPWaniKaniPlugin();

$plugin->run();
