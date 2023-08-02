<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://Wordpress.com
 * @since             1.0.0
 * @package           Product_dis
 *
 * @wordpress-plugin
 * Plugin Name:       product display
 * Plugin URI:        https://product_display.com
 * Description:       To add product, to remove product, to display product.
 * Version:           1.0.0
 * Author:            dave_property <davesproperty340@gmail.com>
 * Author URI:        https://Wordpress.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       product_dis
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PRODUCT_DIS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-product_dis-activator.php
 */
function activate_product_dis() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-product_dis-activator.php';
	Product_dis_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-product_dis-deactivator.php
 */
function deactivate_product_dis() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-product_dis-deactivator.php';
	Product_dis_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_product_dis' );
register_deactivation_hook( __FILE__, 'deactivate_product_dis' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-product_dis.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_product_dis() {

	$plugin = new Product_dis();
	$plugin->run();

}
run_product_dis();
