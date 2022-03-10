<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       dave/dawson
 * @since      1.0.0
 *
 * @package    Daves_Family_Tree
 * @subpackage Daves_Family_Tree/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Daves_Family_Tree
 * @subpackage Daves_Family_Tree/includes
 * @author     Dave Dawson <Dave.Dawson82@gmail.com>
 */
class Daves_Family_Tree_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'daves-family-tree',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
