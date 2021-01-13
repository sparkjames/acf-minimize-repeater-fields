<?php

/**
 *
 * @link              https://jpfleiderer.com
 * @since             1.0.0
 * @package           Acf_Minimize_Repeater_Fields
 *
 * @wordpress-plugin
 * Plugin Name:       ACF Minimize Repeater Fields
 * Plugin URI:        https://jpfleiderer.com
 * Description:       Force repeater fields to use the collapse feature as long as there is more than one sub field.
 * Version:           1.0.0
 * Author:            James Pfleiderer
 * Author URI:        https://jpfleiderer.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       acf-minimize-repeater-fields
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'ACF_MINIMIZE_REPEATER_FIELDS_VERSION', '1.0.0' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-acf-minimize-repeater-fields.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_acf_minimize_repeater_fields() {

	$plugin = new Acf_Minimize_Repeater_Fields();
	$plugin->run();

}
run_acf_minimize_repeater_fields();
