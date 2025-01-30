<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WPMasterToolKit Addon Exemple
 * Requires Plugins:  wpmastertoolkit
 * Plugin URI:        https://wpmastertoolkit.com/
 * Description:       WPMasterToolKit Addon Exemple is created to show you how to create an addon for WPMasterToolKit.
 * Version:           1.0.0
 * Author:            Webdeclic
 * Author URI:        https://webdeclic.com
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpmastertoolkit-addon-exemple
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin Name Path for plugin includes.
 */
define( 'WPMASTERTOOLKIT_ADDON_EXEMPLE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin Name URL for plugin sources (css, js, images etc...).
 */
define( 'WPMASTERTOOLKIT_ADDON_EXEMPLE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Add modules data to WPMasterToolKit.
 */
add_filter( 'wpmastertoolkit_modules_data', function($modules){
    $modules['Exemple_Of_New_Module'] = array(
        'original_name' => "Exemple Of New Module",
        'group'         => 'other-features',
        'path'          => WPMASTERTOOLKIT_ADDON_EXEMPLE_PLUGIN_PATH . 'modules/class-exemple-of-new-module.php',
    );
    return $modules;
});

/**
 * Add modules labels to WPMasterToolKit.
 */
add_filter( 'wpmastertoolkit_modules_labels', function($modules){
    $modules['Exemple_Of_New_Module'] = array(
        'name' => esc_html_x( "Exemple Of New Module", "Module name", 'wpmastertoolkit-addon-exemple' ),
		'desc' => esc_html_x( "Description of the module", "Module description", 'wpmastertoolkit-addon-exemple' ),
    );
    return $modules;
});