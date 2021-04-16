<?php
/**
 * The plugin file
 *
 * @category    WP_Plugin_Boilerplate
 * @package     WP_Plugin_Boilerplate
 * @author      Your Name <jjpeleato@example.com>
 * @license     http://www.gnu.org/licenses/gpl-2.0.txt
 * @link        http://example.com/
 * @copyright   2XXX Your Name or Company Name
 * @since       0.1.0
 *
 * @wordpress-plugin
 * Plugin Name:             WordPress Plugin Boilerplate
 * Plugin URI:              https://github.com/jjpeleato/wp-plugin-boilerplate
 * Description:             Description of the plugin.
 * Version:                 0.1.0
 * Author:                  Your Name or Your Company
 * Author URI:              http://example.com/
 * License:                 GPL-2.0+
 * License URI:             http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:             wp-plugin-boilerplate
 * Domain Path:             /lang
 * WC requires at least:    5.4.1
 * WC tested up to:         5.4.1
 * Requires PHP:            7.1
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area.
 *
 * More information:
 *
 * https://developer.wordpress.org/plugins/
 * https://codex.wordpress.org/Plugin_API
 */

declare(strict_types=1);

/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Currently variables plugin: version, name, domain, public url and path.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define( 'WP_PLUGIN_BOILERPLATE_VERSION', '0.1.0' );
define( 'WP_PLUGIN_BOILERPLATE_MINIMUM_WP_VERSION', '5.4.1' );
define( 'WP_PLUGIN_BOILERPLATE_NAME', 'WordPress Plugin Boilerplate' );
define( 'WP_PLUGIN_BOILERPLATE_MACHINE_NAME', 'WP_Plugin_Boilerplate' );
define( 'WP_PLUGIN_BOILERPLATE_DOMAIN', 'wp-plugin-boilerplate' );
define( 'WP_PLUGIN_BOILERPLATE_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );
define( 'WP_PLUGIN_BOILERPLATE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'WP_PLUGIN_BOILERPLATE_PATH_FILE', untrailingslashit( __FILE__ ) );

/**
 * Load the required dependencies for this plugin.
 */
require_once WP_PLUGIN_BOILERPLATE_PATH . '/includes/class-wp-plugin-boilerplate-functions.php';

/**
 * Load WP CLI command(s) on demand.
 */
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once WP_PLUGIN_BOILERPLATE_PATH . '/includes/class-wp-plugin-boilerplate-cli.php';
}

if ( ! function_exists( 'wp_plugin_boilerplate_install' ) ) {
	/**
	 * The code that runs during plugin activation.
	 * This action is documented in includes/class-wp-plugin-boilerplate-install.php
	 */
	function wp_plugin_boilerplate_install() {
		require_once WP_PLUGIN_BOILERPLATE_PATH . '/includes/class-wp-plugin-boilerplate-install.php';
		WP_Plugin_Boilerplate_Install::activate();
	}
}

if ( ! function_exists( 'wp_plugin_boilerplate_uninstall' ) ) {
	/**
	 * The code that runs during plugin deactivation.
	 * This action is documented in includes/class-wp-plugin-boilerplate-uninstall.php
	 */
	function wp_plugin_boilerplate_uninstall() {
		require_once WP_PLUGIN_BOILERPLATE_PATH . '/includes/class-wp-plugin-boilerplate-uninstall.php';
		WP_Plugin_Boilerplate_Uninstall::deactivate();
	}
}

if ( ! function_exists( 'wp_plugin_boilerplate_run' ) ) {
	/**
	 * Initialize the WP_Plugin_Boilerplate_Admin class and registry install/uninstall hooks.
	 */
	function wp_plugin_boilerplate_run() {
		register_activation_hook( WP_PLUGIN_BOILERPLATE_PATH_FILE, 'wp_plugin_boilerplate_install' );
		register_deactivation_hook( WP_PLUGIN_BOILERPLATE_PATH_FILE, 'wp_plugin_boilerplate_uninstall' );
	}
}

wp_plugin_boilerplate_run();
