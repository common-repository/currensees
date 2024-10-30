<?php
/**
 * Plugin Name: Currensees
 * Plugin URI: https://moatsystems.com/currency-api/
 * Description: A WordPress plugin for integrating with Currency API.
 * Version: 1.0
 * Author: Moat Systems Limited
 * Author URI: https://moatsystems.com
 * License: GPL2
 */

require 'vendor/autoload.php';

use Currensees\Currensees;

add_action('init', function () {
    $currensees = new Currensees();
});
