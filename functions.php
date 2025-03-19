<?php
/**
 * DarshanPatani Starter Theme - Functions File
 *
 * This file initializes the theme by defining constants, loading dependencies, 
 * and setting up the theme through the Setup class.
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Define theme constants
 */
if (!defined('DPTHEMEROOT')) {
    define('DPTHEMEROOT', get_template_directory_uri());
}

if (!defined('DPTHEMEPATH')) {
    define('DPTHEMEPATH', get_template_directory());
}

if (!defined('DPTHEMEINC')) {
    define('DPTHEMEINC', DPTHEMEPATH . '/includes/');
}

if (!defined('DPTHEMEASSETS')) {
    define('DPTHEMEASSETS', DPTHEMEROOT . '/assets/');
}

if (!defined('DPTHEMEDISTROOT')) {
    define('DPTHEMEDISTROOT', DPTHEMEASSETS . '/dist/');
}

/**
 * Autoload dependencies via Composer
 */
if (file_exists(DPTHEMEPATH . '/vendor/autoload.php')) {
    require_once DPTHEMEPATH . '/vendor/autoload.php';
}

/**
 * Initialize the theme setup class
 */
if (!class_exists('darshanpatani\Wordpress\Theme\StarterTemplate\Setup')) {
    return;
}

use darshanpatani\Wordpress\Theme\StarterTemplate\Setup;

// Instantiate the theme setup class
new Setup();
