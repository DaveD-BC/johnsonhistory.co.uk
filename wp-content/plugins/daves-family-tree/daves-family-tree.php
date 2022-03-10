<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              dave/dawson
 * @since             1.0.0
 * @package           Daves_Family_Tree
 *
 * @wordpress-plugin
 * Plugin Name:       daves-family-tree
 * Plugin URI:        daves-family-tree
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Dave Dawson
 * Author URI:        dave/dawson
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       daves-family-tree
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
define( 'DAVES_FAMILY_TREE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-daves-family-tree-activator.php
 */
function activate_daves_family_tree() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-daves-family-tree-activator.php';
	Daves_Family_Tree_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-daves-family-tree-deactivator.php
 */
function deactivate_daves_family_tree() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-daves-family-tree-deactivator.php';
	Daves_Family_Tree_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_daves_family_tree' );
register_deactivation_hook( __FILE__, 'deactivate_daves_family_tree' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-daves-family-tree.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_daves_family_tree() {

	$plugin = new Daves_Family_Tree();
	$plugin->run();

}
run_daves_family_tree();
