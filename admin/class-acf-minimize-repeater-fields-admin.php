<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://jpfleiderer.com
 * @since      1.0.0
 *
 * @package    Acf_Minimize_Repeater_Fields
 * @subpackage Acf_Minimize_Repeater_Fields/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Acf_Minimize_Repeater_Fields
 * @subpackage Acf_Minimize_Repeater_Fields/admin
 * @author     James Pfleiderer <author@email.com>
 */
class Acf_Minimize_Repeater_Fields_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function add_collapse_to_repeater($field){
		// echo '<pre>'; print_r($field); echo '</pre>';
		$screen = get_current_screen();
		// echo '<pre>'; print_r($screen); echo '</pre>';

		// Make sure this is an edit screen, but not an edit screen for the ACF fields. E.g., this should run on an edit post page or somewhere else where the repeater fields could appear.
		if( $screen->parent_base === 'edit' && $screen->post_type !== 'acf-field-group' ){

			// Make sure that the field doesn't already have a 'collapased' value, and that it has more than 1 sub field. If it only has 1 sub field then there is no use in collapsing the row.
			if( isset($field['collapsed']) && !$field['collapsed'] ){
				if( isset($field['sub_fields']) && count($field['sub_fields']) > 1 ){

					// Set the first sub field to be the one still visible when the row is collapsed.
					$field['collapsed'] = $field['sub_fields'][0]['key'];

				}
			}

		}

		return $field;
	}

}
