<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       roketin.com
 * @since      1.0.0
 *
 * @package    Wp_Rp
 * @subpackage Wp_Rp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Rp
 * @subpackage Wp_Rp/includes
 * @author     Kevin Nathaniel,Vincent,Jesslyn Diva <kevinnathaniel48@gmail.com>
 */
class Wp_Rp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-rp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
